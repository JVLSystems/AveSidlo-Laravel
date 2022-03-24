<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Order;
use App\Mail\OrderMail;
use App\Models\Company;
use App\Models\Founder;
use App\Models\Invoice;
use App\Models\Service;
use App\Models\Supplier;
use App\Models\EnumState;
use App\Models\OrderItem;
use App\Models\EnumGender;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;
use App\Models\EnumCompanySeat;
use App\Models\EnumTypeOfSpace;
use App\Http\Requests\OrderRequest;
use App\Models\EnumIdentityDocType;
use App\Models\EnumOwnerType;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('ClientModule.order.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        old('seatType')
            ? ( old('seatType') == 1 ? $oldSeatType = false : $oldSeatType = true )
            : $oldSeatType = false;

        return view('ClientModule.order.add', [
            'services' => Service::all(),
            'typeOfSpaces' => EnumTypeOfSpace::all(),
            'companies' => Company::getUserCompanies(),
            'suppliers' => Supplier::all(),
            'genders' => EnumGender::all(),
            'ownerTypes' => EnumOwnerType::all(),
            'identityDocTypes' => EnumIdentityDocType::all(),
            'states' => EnumState::all(),
            'year' => Carbon::now()->format('Y') - 18,
            'oldService' => Service::getServiceResource(),
            'oldSeatType' => $oldSeatType,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        // return $request->all();
        $service = Service::findOrFail($request->service);
        $company = $request->company ? Auth::user()->company()->findOrFail($request->company) : null;

        $number = Order::createNumber();

        $quantity = $request->period ?: 1;

        $priceWithoutVat = Order::priceCalculation($service->price_without_vat, $request->period);
        $priceWithVat = Order::priceCalculation($service->price_with_vat, $request->period);

        $invoice = Invoice::insert($company, $service, $number, $request->note, $priceWithoutVat, $priceWithVat);

        $order = Order::insert($service, $invoice);

        $vat = $order->vat->percentage ? $order->vat->percentage : 1;

        $priceMjWithVat  = $service->price_without_vat * (1 + ($vat / 100));
        $priceWithoutVat = $service->price_without_vat * $quantity;
        $priceWithVat    = $priceWithoutVat * (1 + ($vat / 100));


        $companySeat = $service->id == 1 ? EnumCompanySeat::insert($request) : null;


        $orderItem = OrderItem::insert($request, $quantity, $order, $service, $companySeat, $company, $priceWithoutVat, $priceWithVat, $priceMjWithVat);

        $service->id == 1 ? Founder::insert($request, $orderItem) : null;


        InvoiceItem::insert($invoice, $order, $orderItem, $service, $priceMjWithVat, $quantity);

        Mail::to($request->user())->send(new OrderMail);

        return redirect()->route('objednavky.index')->withStatus('Objednávka bola úspešne odoslaná, v čo najkratšej dobe Vás budeme kontaktovať e-mailom.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    /**
     * @param string $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function getServiceData($service)
    {
        $service = Service::findOrFail($service);

        return response()->json($service->toArray());
    }

}

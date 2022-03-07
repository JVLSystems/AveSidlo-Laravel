<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\EnumMj;
use App\Models\Company;
use App\Models\Service;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Auth;

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
        $services = Service::all();
        $companies = Company::where('user_id', auth()->id())->get();

        return view('ClientModule.order.add', compact('services', 'companies') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $service = Service::findorFail($request->service);

        $number = Order::createNumber();
        $company = null;
        $c = null;

        if ( $request->company ) {
            $c = Auth::user()->company()->findOrFail($request->company);
            $company = $request->company;
        }

        $priceWithoutVat = $request->period ? (($service->price_without_vat ?? 0) * $request->period) : ($service->price_without_vat ?? 0);
        $priceWithVat = $request->period ? (($service->price_with_vat ?? 0) * $request->period) : ($service->price_with_vat ?? 0);

        $order = Order::create([
            'user_id' => auth()->id(),
            'vat_id' => $service->vat_id,
            'company_id' => $company,
            'number' => $number,
            'price_without_vat' => $priceWithoutVat,
            'price_with_vat' => $priceWithVat,
            'note' => $request->note,
        ]);

        $quantity        = $request->period ?: 1;
        $vat             = $order->vat->percentage ? $order->vat->percentage : 1;

        $priceMjWithVat  = $service->price_without_vat * (1 + ($vat / 100));
        $priceWithoutVat = $service->price_without_vat * $quantity;
        $priceWithVat    = $priceWithoutVat * (1 + ($vat / 100));

        OrderItem::create([
            'order_id' => $order->id,
            'mj_id' => EnumMj::where('code', EnumMj::CODE_MONTH)->first()->id,
            'service_id' => $service->id,
            'name' => $c ? sprintf("%s - %s", $service->name, $c->name) : $service->name,
            'price_without_vat' => $priceWithoutVat,
            'price_with_vat' => $priceWithVat,
            'price_mj_without_vat' => $service->price_without_vat,
            'price_mj_with_vat' => $priceMjWithVat,
            'quantity' => $quantity,
        ]);

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

}

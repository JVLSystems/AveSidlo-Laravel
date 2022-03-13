<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Order;
use App\Mail\OrderMail;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\Service;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\InvoiceItem;
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
        return view('ClientModule.order.add', [
            'services' => Service::all(),
            'companies' => Company::getUserCompanies(),
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
        $service = Service::findOrFail($request->service);
        $company = Auth::user()->company()->findOrFail($request->company);

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

        $orderItem = OrderItem::insert($quantity, $order, $service, $company, $priceWithoutVat, $priceWithVat, $priceMjWithVat);

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
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Company;
use App\Models\Service;
use App\Models\OrderItem;
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
        return view('ClientModule.order.add', [
            'services' => Service::all(),
            'companies' => Company::where('user_id', auth()->id())->get(),
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
        $service = Service::findorFail($request->service);

        $company = null;
        $company_id = null;

        if ( $request->company ) {
            $company = Auth::user()->company()->findOrFail($request->company);
            $company_id = $request->company;
        }

        $order = Order::insertOrder($request->period, $service, $company_id, $request->note);

        OrderItem::insertOrderItem($request->period, $order, $service, $company);

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
<<<<<<< HEAD
=======

>>>>>>> e0cc6d01767d0d0bd3ed1d30f1bce9cebfd1b510
}

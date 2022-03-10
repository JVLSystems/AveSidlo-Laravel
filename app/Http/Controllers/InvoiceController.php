<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Invoice as LdInvoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('ClientModule.invoice.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        $customer = $invoice->purchaser_id
            ? new Buyer([
                'aboutCompany' => [
                    'name'       => $invoice->purchaser->name,
                    'address'    => $invoice->purchaser->street,
                    'zipAndCity' => sprintf('%s %s', $invoice->purchaser->zip->name, $invoice->purchaser->city->name),
                    'state'      => $invoice->purchaser->state->name,
                ],
                'company' => [
                    'IČO'        => $invoice->purchaser->ico,
                    'DIČ'        => $invoice->purchaser->dic,
                    'IČDPH'      => $invoice->purchaser->icdph,
                ],
            ])
            : new Buyer([
                'user' => $invoice->user,
            ]);

        $supplier = $invoice->supplier_id
            ? new Party([
                'aboutSupplier' => [
                    'name'       => $invoice->supplier->name,
                    'address'    => $invoice->supplier->street,
                    'zipAndCity' => sprintf('%s %s', $invoice->supplier->zip->name, $invoice->supplier->city->name),
                    'state'      => $invoice->supplier->state->name,
                ],
                'supplier' => [
                    'IČO'        => $invoice->supplier->ico,
                    'DIČ'        => $invoice->supplier->dic,
                    'IČDPH'      => $invoice->supplier->icdph,
                ],
            ])
            : new Party([
                // 'user' => $invoice->user,
            ]);


        $item = (new InvoiceItem())
                    ->title($invoice->item->name)
                    ->pricePerUnit($invoice->item->price_mj_without_vat)
                    ->quantity($invoice->item->quantity);

        $invoice = LdInvoice::make()
            ->buyer($customer)
            ->seller($supplier)
            ->taxRate($invoice->item->vat->percentage)
            ->payUntilDays(14)
            ->dateFormat('d.m.Y')
            ->serialNumberFormat($invoice->number)
            ->addItem($item);

        return $invoice->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }

    /**
     *
     * @param  \App\Models\Invoice  $invoice
     * @return Response
     */
    public function download(Invoice $invoice)
    {
        $customer = $invoice->purchaser_id
            ? new Buyer([
                'aboutCompany' => [
                    'name'       => $invoice->purchaser->name,
                    'address'    => $invoice->purchaser->street,
                    'zipAndCity' => sprintf('%s %s', $invoice->purchaser->zip->name, $invoice->purchaser->city->name),
                    'state'      => $invoice->purchaser->state->name,
                ],
                'company' => [
                    'IČO'        => $invoice->purchaser->ico,
                    'DIČ'        => $invoice->purchaser->dic,
                    'IČDPH'      => $invoice->purchaser->icdph,
                ],
            ])
            : new Buyer([
                'user' => $invoice->user,
            ]);

        $supplier = $invoice->supplier_id
            ? new Party([
                'aboutSupplier' => [
                    'name'       => $invoice->supplier->name,
                    'address'    => $invoice->supplier->street,
                    'zipAndCity' => sprintf('%s %s', $invoice->supplier->zip->name, $invoice->supplier->city->name),
                    'state'      => $invoice->supplier->state->name,
                ],
                'supplier' => [
                    'IČO'        => $invoice->supplier->ico,
                    'DIČ'        => $invoice->supplier->dic,
                    'IČDPH'      => $invoice->supplier->icdph,
                ],
            ])
            : new Party([
                // 'user' => $invoice->user,
            ]);


        $item = (new InvoiceItem())
                    ->title($invoice->item->name)
                    ->pricePerUnit($invoice->item->price_mj_without_vat)
                    ->quantity($invoice->item->quantity);

        $invoice = LdInvoice::make()
            ->buyer($customer)
            ->seller($supplier)
            ->taxRate($invoice->item->vat->percentage)
            ->payUntilDays(14)
            ->serialNumberFormat($invoice->number)
            ->addItem($item)
            ->filename( sprintf('Faktura_%s', $invoice->number) );

        return $invoice->download();
    }
}
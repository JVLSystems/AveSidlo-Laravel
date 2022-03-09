<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'mj_id',
        'vat_id',
        'name',
        'price_mj_without_vat',
        'price_mj_with_vat',
        'price_without_vat',
        'price_with_vat',
        'quantity',
    ];

    // ******************************* HELPER METHODS *************************************

    /**
     * @param \App\Models\Invoice $invoice
     * @param \App\Models\Order $order
     * @param \App\Models\OrderItem $orderItem
     * @param \App\Models\Service $service
     * @param float $priceMjWithVat
     * @param int $quantity
     * @return \App\Models\InvoiceItem
     */
    public static function insertInvoiceItem(Invoice $invoice, Order $order, OrderItem $orderItem, Service $service, float $priceMjWithVat, int $quantity): InvoiceItem
    {
        return InvoiceItem::create([
            'invoice_id' => $invoice->id,
            'mj_id' => 1,
            'vat_id' => $order->vat_id,
            'name' => $orderItem->name,
            'price_mj_without_vat' => $service->price_without_vat,
            'price_mj_with_vat' => $priceMjWithVat,
            'price_without_vat' => $invoice->price_without_vat,
            'price_with_vat' => $invoice->price_with_vat,
            'quantity' => $quantity,
        ]);
    }
}

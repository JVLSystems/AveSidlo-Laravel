<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'mj_id',
        'service_id',
        'name',
        'price_without_vat',
        'price_with_vat',
        'quantity',
        'price_mj_without_vat',
        'price_mj_with_vat',
    ];

    public $timestamps = false;

    // ******************************* HELPER METHODS *************************************

    /**
     * @param int|null $quantity
     * @param \App\Models\Order $Order
     * @param \App\Models\Service $service
     * @param float $priceWithoutVat
     * @param float $priceWithVat
     * @param float $priceMjWithVat
     * @return \App\Models\OrderItem
     */
    public static function insertOrderItem(?int $quantity, Order $order, Service $service, ?Company $company, float $priceWithoutVat, float $priceWithVat, float $priceMjWithVat): OrderItem
    {
        return OrderItem::create([
            'order_id' => $order->id,
            'mj_id' => EnumMj::where('code', EnumMj::CODE_MONTH)->first()->id,
            'service_id' => $service->id,
            'name' => $company ? sprintf("%s - %s", $service->name, $company->name) : $service->name,
            'price_without_vat' => $priceWithoutVat,
            'price_with_vat' => $priceWithVat,
            'price_mj_without_vat' => $service->price_without_vat,
            'price_mj_with_vat' => $priceMjWithVat,
            'quantity' => $quantity,
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'vat_id',
        'company_id',
        'invoice_id',
        'number',
        'price_without_vat',
        'price_with_vat',
        'note',
    ];

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return BelongsTo
     */
    public function vat(): BelongsTo
    {
        return $this->belongsTo(EnumVat::class);
    }

    /**
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    // ******************************* HELPER METHODS *************************************

    /**
     * @return string
     */
    public function scopeCreateNumber(): string
    {
        while(true) {
            $number = Str::upper(Str::random(10));
            $order = Order::where('number', $number)->get();

            if ($order->isEmpty()) break;
        }

        return $number;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return int|null
     */
    public function scopeGetOrderCount($query):? int
    {
        return $query->where('user_id', auth()->id())->count();
    }

    /**
     * @param int|null $period
     * @param \App\Models\Service $service
     * @param int|null $company
     * @param string|null $note
     * @return \App\Models\Order
     */
    public static function insertOrder(?int $period, Service $service, ?int $company_id, ?string $note): Order
    {
        $priceWithoutVat = $period ? (($service->price_without_vat ?? 0) * $period) : ($service->price_without_vat ?? 0);
        $priceWithVat = $period ? (($service->price_with_vat ?? 0) * $period) : ($service->price_with_vat ?? 0);

        return Order::create([
            'user_id' => auth()->id(),
            'vat_id' => $service->vat_id,
            'company_id' => $company_id,
            'number' => Order::createNumber(),
            'price_without_vat' => $priceWithoutVat,
            'price_with_vat' => $priceWithVat,
            'note' => $note,
        ]);
    }
}

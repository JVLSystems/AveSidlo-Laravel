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
        'note'
    ];


    /**
     * @var array<string, string>
     */
    protected $casts = [
        'user_id' => 'integer',
        'vat_id' => 'integer',
        'company_id' => 'integer',
        'invoice_id' => 'integer',
        'price_without_vat' => 'float',
        'price_with_vat' => 'float',
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
     * @param float $price
     * @param int|null $period
     * @return float
     */
    public static function priceCalculation(float $price, int $period = null): float
    {
        return $period ? (($price ?? 0) * $period) : ($price ?? 0);
    }


    /**
     * @param \App\Models\Service $service
     * @param int|null $company
     * @param \App\Models\Invoice $invoice
     * @param float $priceWithoutVat
     * @param float $priceWithVat
     * @param string|null $note
     * @param string $number
     * @return \App\Models\Order
     */
    public static function insert(Service $service, Invoice $invoice): Order
    {
        return Order::create([
            'user_id' => auth()->id(),
            'vat_id' => $service->vat_id,
            'company_id' => $invoice->purchaser_id,
            'invoice_id' => $invoice->id,
            'number' => $invoice->number,
            'price_without_vat' => $invoice->price_without_vat,
            'price_with_vat' => $invoice->price_with_vat,
            'note' => $invoice->note,
        ]);
    }
}

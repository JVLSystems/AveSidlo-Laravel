<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

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

}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    /** @const */
    public const DEFAULT_SS_SYMBOL = '0308';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'supplier_id',
        'purchaser_id',
        'type_payment_id',
        'bank_account_id',
        'vat_id',
        'user_id',
        'number',
        'issue_date_at',
        'due_date_at',
        'vs',
        'ss',
        'note',
        'price_without_vat',
        'price_with_vat',
        'is_paid',
        'paid_date_at',
    ];

    // ******************************* HELPER METHODS *************************************

    /**
     * @return HasOne
     */
    public function item(): HasOne
    {
        return $this->hasOne(InvoiceItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function purchaser(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * @return BelongsTo
     */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return int|null
     */
    public function scopeGetInvoiceCount($query):? int
    {
        return $query->where('user_id', auth()->id())->count();
    }

    /**
     * @param \App\Models\Company|null $company
     * @param \App\Models\Service $service
     * @param string $number
     * @param string|null $note
     * @param float $priceWithoutVat
     * @param float $priceWithVat
     * @return \App\Models\Invoice
     */
    public static function insert(?Company $company, Service $service, string $number, ?string $note, float $priceWithoutVat, float $priceWithVat): Invoice
    {
        return Invoice::create([
            'purchaser_id' => ($company ? $company->id : null),
            'type_payment_id' => 1,
            'vat_id' => $service->vat_id,
            'user_id' => Auth()->id(),
            'number' => $number,
            'issue_date_at' => Carbon::now(),
            'due_date_at' => Carbon::now()->addDays(14),
            'ss' => Invoice::DEFAULT_SS_SYMBOL,
            'note' => $note,
            'price_without_vat' => $priceWithoutVat,
            'price_with_vat' => $priceWithVat,
        ]);
    }
}

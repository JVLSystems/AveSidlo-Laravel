<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /** @const */
    public const DEFAULT_SS_SYMBOL = '0308';

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
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return int|null
     */
    public function scopeGetInvoiceCount($query):? int
    {
        return $query->where('user_id', auth()->id())->count();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

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

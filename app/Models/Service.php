<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'vat_id',
        'name',
        'price_without_vat',
        'price_with_vat',
    ];

    public $timestamps = false;
}

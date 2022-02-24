<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumVat extends Model
{
    use HasFactory;

    protected $table = 'enum__vat';

    protected $fillable = [
        'name',
        'percentage',
    ];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumTypePayment extends Model
{
    use HasFactory;

    protected $table = 'enum__type_payments';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;
}

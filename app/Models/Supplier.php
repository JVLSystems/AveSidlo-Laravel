<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'zip_id',
        'state_id',
        'name',
        'ico',
        'dic',
        'icdph',
        'street',
        'active',
    ];
}

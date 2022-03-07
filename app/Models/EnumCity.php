<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnumCity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'enum__cities';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;
}

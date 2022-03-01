<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumZip extends Model
{
    use HasFactory;

    protected $table = 'enum__zip';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;
}

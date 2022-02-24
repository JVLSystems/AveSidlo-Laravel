<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumState extends Model
{
    use HasFactory;

    protected $table = 'enum__state';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;
}

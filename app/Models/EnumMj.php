<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumMj extends Model
{
    use HasFactory;

    /** @const */
    public const CODE_MONTH = 'MONTH';

    protected $table = 'enum__mj';

    protected $fillable = [
        'name',
        'code',
    ];

    public $timestamps = false;
}

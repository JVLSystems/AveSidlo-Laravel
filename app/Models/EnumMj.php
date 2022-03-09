<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumMj extends Model
{
    use HasFactory;

    /** @const */
    public const CODE_MONTH = 'MONTH';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'enum__mj';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
    ];

    public $timestamps = false;
}

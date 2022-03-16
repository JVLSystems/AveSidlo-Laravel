<?php

namespace App\Models;

use App\Traits\BelongsToCity;
use App\Traits\BelongsToState;
use App\Traits\BelongsToZip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory, BelongsToCity, BelongsToZip, BelongsToState;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

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

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(EnumCity::class);
    }

    /**
     * @return BelongsTo
     */
    public function zip(): BelongsTo
    {
        return $this->belongsTo(EnumZip::class);
    }

    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(EnumState::class);
    }
}

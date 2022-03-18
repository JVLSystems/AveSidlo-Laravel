<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vat_id',
        'name',
        'price_without_vat',
        'price_with_vat',
        'form_resource',
    ];

    public $timestamps = false;

    // ******************************* HELPER METHODS *************************************

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int|null $service
     * @return string|null
     */
    public function scopeGetServiceResource($query, ?int $service): string
    {
        return $query->where('id', $service)->first()->form_resource ?? '';
    }
}

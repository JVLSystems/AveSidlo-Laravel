<?php

namespace App\Models;

use App\Http\Requests\CompanyRequest;
use Barryvdh\Reflection\DocBlock\Type\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'city_id',
        'zip_id',
        'state_id',
        'name',
        'ico',
        'dic',
        'icdph',
        'street',
        'payment_at',
        'is_paid',
        'is_main',
        'status',
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

    // ******************************* HELPER METHODS *************************************

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGetUserCompanies($query): mixed
    {
        return $query->where('user_id', auth()->id())->get();
    }

    /**
     * @param App\Http\Requests\Request $request
     * @param string $status
     * @param \App\Models\Company|null $company
     * @return mixed
     */
    public static function insertOrUpdate(CompanyRequest $request, ?Company $company = null, string $status = 'insert'): mixed
    {
        switch($status) {
            case('insert'):

                $city = EnumCity::firstOrCreate([
                    'name' => $request->city,
                ]);

                $zip = EnumZip::firstOrCreate([
                    'name' => $request->zip,
                ]);

                return Company::create([
                    'user_id' => auth()->id(),
                    'city_id' => $city->id,
                    'zip_id' => $zip->id,
                    'state_id' => $request->state,
                    'name' => $request->name,
                    'ico' => $request->ico,
                    'dic' => $request->dic,
                    'icdph' => $request->icdph,
                    'street' => $request->address,
                ]);

            case('update'):

                $city = EnumCity::firstOrCreate([
                    'name' => $request->city,
                ]);

                $zip = EnumZip::firstOrCreate([
                    'name' => $request->zip,
                ]);

                return $company->update([
                    'city_id' => $city->id,
                    'zip_id' => $zip->id,
                    'state_id' => $request->state,
                    'name' => $request->name,
                    'ico' => $request->ico,
                    'dic' => $request->dic,
                    'icdph' => $request->icdph,
                    'street' => $request->address,
                ]);
        }

    }
}

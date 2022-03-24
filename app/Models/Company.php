<?php

namespace App\Models;

use App\Traits\BelongsToZip;
use App\Traits\BelongsToCity;
use App\Traits\BelongsToState;
use App\Http\Requests\CompanyRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes, BelongsToCity, BelongsToZip, BelongsToState;

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

    // ******************************* HELPER METHODS *************************************

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function scopeGetUserCompanies($query): mixed
    {
        return $query->where('user_id', auth()->id())->get();
    }

    /**
     * @param \App\Http\Requests\CompanyRequest $request
     * @param \App\Models\Company|null $company
     * @return \App\Models\Company
     */
    public static function insertOrUpdate(CompanyRequest $request, ?Company $company = null): Company
    {
        $city = EnumCity::firstOrCreate(['name' => $request->city]);
        $zip = EnumZip::firstOrCreate(['name' => $request->zip]);

        return Company::updateOrCreate(
            [
                'id' => ($company ? $company->id : null)
            ],
            [
                'user_id' => auth()->id(),
                'city_id' => $city->id,
                'zip_id' => $zip->id,
                'state_id' => $request->state,
                'name' => $request->name,
                'ico' => $request->ico,
                'dic' => $request->dic,
                'icdph' => $request->icdph,
                'street' => $request->address,
            ]
        );

    }
}

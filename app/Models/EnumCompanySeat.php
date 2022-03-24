<?php

namespace App\Models;

use App\Http\Requests\OrderRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnumCompanySeat extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'enum__company_seats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'street',
        'city_id',
        'zip_id',
        'type_of_space',
        'space_owner',
    ];

    public $timestamps = false;

    // ******************************* HELPER METHODS *************************************

    /**
     * @param \App\Http\Requests\OrderRequest
     * @return \App\Models\EnumCompanySeat
     */
    public static function insert(OrderRequest $request): EnumCompanySeat
    {
        $city = EnumCity::firstOrCreate(['name' => $request->city]);
        $zip = EnumZip::firstOrCreate(['name' => $request->zip]);
        $request->founderStreetRegisterNumber
            ? $street = sprintf('%s %s/%s', $request->founderStreet, $request->founderStreetRegisterNumber, $request->founderStreetNumber)
            : $street = sprintf('%s %s', $request->founderStreet, $request->founderStreetNumber);

        return EnumCompanySeat::create([
            'street' => $street,
            'city_id' => $city->id,
            'zip_id' => $zip->id,
            'type_of_space' => $request->typeOfSpace,
            'space_owner' => $request->spaceOwner,
        ]);
    }
}

<?php

namespace App\Models;

use App\Http\Requests\OrderRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Founder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_items_id',
        'city_id',
        'zip_id',
        'state_id',
        'owner_type',
        'gender',
        'ico',
        'company_name',
        'street',
        'name',
        'date_of_birth',
        'birth_id',
        'nationality',
        'identity_doc_type',
        'identity_doc_number',
        'capital',
        'share',
        'paid',
        'is_executive_manager',
        'is_deposit_administrator',
    ];

    public $timestamps = false;

    // ******************************* HELPER METHODS *************************************

    /**
     * @param \App\Http\Requests\OrderRequest
     * @param \App\Models\OrderItem $orderItem
     * @return \App\Models\Founder
     */
    public static function insert(OrderRequest $request, OrderItem $orderItem): Founder
    {
        $city = EnumCity::firstOrCreate(['name' => $request->founderCity]);
        $zip = EnumZip::firstOrCreate(['name' => $request->founderZip]);
        $request->founderStreetRegisterNumber
            ? $street = sprintf('%s %s/%s', $request->founderStreet, $request->founderStreetRegisterNumber, $request->founderStreetNumber)
            : $street = sprintf('%s %s', $request->founderStreet, $request->founderStreetNumber);

        return Founder::create([
            'order_items_id' => $orderItem->id,
            'city_id' => $city->id,
            'zip_id' => $zip->id,
            'state_id' => $request->founderState,
            'owner_type' => $request->founderOwnerType,
            'gender' => $request->founderGender,
            'ico' => $request->founderIco,
            'company_name' => $request->founderCompanyName,
            'street' => ($request->founderAddress ? $request->founderAddress : $street),
            'name' => sprintf('%s %s %s %s', $request->founderTitleBeforeName, $request->founderName, $request->founderSurname, $request->founderTitleAfterName),
            'date_of_birth' => sprintf('%s-%s-%s', $request->founderBirthYear, $request->founderBirthMonth, $request->founderBirthDay),
            'birth_id' => sprintf('%s/%s', $request->founderBirthId, $request->founderBirthIdSuffix),
            'nationality' => $request->founderNationality,
            'identity_doc_type' => $request->founderIdentityDocType,
            'identity_doc_number' => $request->founderIdentityDocNumber,
            'capital' => $request->founderCapital,
            'share' => $request->founderShare,
            'paid' => $request->founderPaid,
            'is_executive_manager' => $request->founderIsExecutiveManager ?? 0,
            'is_deposit_administrator' => $request->founderIsDepositAdministrator ?? 0,
        ]);
    }
}

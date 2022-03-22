<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service' => 'required|integer',
            'company' => 'required_if:service,2,3|integer',
            'period' => 'required_if:service,2|integer',
            'companyName' => 'required_if:service,1',
            'companyType' => 'required_if:service,1|integer|min:1|max:3',
            'email' => 'required_if:service,1|email',
            'seatType' => 'required_if:service,1|integer|min:1|max:2',
            'street' => 'required_if:seatType,1',
            'streetRegisterNumber' => 'sometimes|nullable|integer',
            'streetNumber' => 'required_if:seatType,1|integer',
            'city' => 'required_if:seatType,1',
            'zip' => 'required_if:seatType,1|regex:/\b\d{5}\b/',
            'typeOfSpace' => 'required_if:seatType,1|integer|min:1|max:5',
            'spaceOwner' => 'required_if:seatType,1',
            'seat' => 'required_if:seatType,2',
            'capital' => 'required_if:seatType,1,2|numeric',
            'paid' => 'required_if:seatType,1,2|numeric',
            'accept' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'service.required' => 'Vyberte službu.',
            'company.required_if' => 'Vyberte spoločnosť.',
            'period.required_if' => 'Zadajte obdobie.',
            'accept.required' => 'Musíte súhlasiť s obchodnými podmienkami.',
            'companyName.required_if' => 'Zadajte obchodné meno spoločnosti.',
            'companyType.required_if' => 'Vyberte typ spoločnosti.',
            'email.required_if' => 'Zadajte e-mail.',
            'seatType.required_if' => 'Vyberte sídlo spoločnosti.',
            'street.required_if' => 'Zadajte ulicu.',
            'streetNumber.required_if' => 'Zadajte orientačné číslo.',
            'city.required_if' => 'Zadajte obec.',
            'zip.required_if' => 'Zadajte PSČ.',
            'typeOfSpace.required_if' => 'Vyberte druh priestoru.',
            'spaceOwner.required_if' => 'Zadajte vlastníka priestoru.',
            'seat.required_if' => 'Vyberte sídlo.',
            'capital.required_if' => 'Zadajte výšku.',
            'paid.required_if' => 'Zadajte rozsah splatenia.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'service' => 'Služba',
            'company' => 'Spoločnosť',
            'period' => 'Obdobie',
            'companyName' => 'Obchodné meno',
            'companyType' => 'Typ spoločnosti',
            'email' => 'E-mail',
            'seatType' => 'Sídlo spoločnosti',
            'street' => 'Ulica',
            'streetRegisterNumber' => 'Súpisné číslo',
            'streetNumber' => 'Orientačné číslo',
            'city' => 'Obec',
            'zip' => 'PSČ',
            'typeOfSpace' => 'Druh priestoru',
            'spaceOwner' => 'Vlastník priestoru',
            'seat' => 'Sídlo',
            'capital' => 'Výška',
            'paid' => 'Rozsah splatenia',
        ];
    }
}

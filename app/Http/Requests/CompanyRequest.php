<?php

namespace App\Http\Requests;

use Arr;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'dic' => 'sometimes|nullable|integer|digits:10',
            'ico' => [
                'required',
                'integer',
                'digits:8',
                Rule::unique('companies')->ignore($this->spolocnosti)
            ],
            // 'icdph' => 'required',
            'name' => 'required|',
            'address' => 'required|',
            'city' => 'required|',
            'state' => 'required|integer',
            'zip' => 'required|regex:/\b\d{5}\b/',
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
            // 'dic.required' => 'Zadajte :attribute vašej spoločnosti.',
            'ico.required' => 'Zadajte :attribute vašej spoločnosti.',
            'name.required' => 'Zadajte :attribute vašej spoločnosti.',
            // 'icdph.required' => 'Zadajte :attribute vašej spoločnosti.',
            'address.required' => 'Zadajte :attribute vašej spoločnosti.',
            'city.required' => 'Zadajte :attribute vašej spoločnosti.',
            'state.required' => 'Vyberte :attribute vašej spoločnosti.',
            'zip.required' => 'Zadajte :attribute vašej spoločnosti.',
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
            'dic' => 'DIČ',
            'ico' => 'IČO',
            'icdph' => 'IČDPH',
            'name' => 'názov',
            'address' => 'adresu',
            'city' => 'mesto',
            'state' => 'štát',
            'zip' => 'PSČ',
        ];
    }
}

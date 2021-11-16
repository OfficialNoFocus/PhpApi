<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class WineRequest extends FormRequest
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

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation Error(s).',
            'data'      => $validator->errors()
        ], 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'naam' => 'required|string|max:75',
            'prijs' => 'required|numeric|between:0,99.99',
            'regio' => 'required|string|max:50',
            'beschrijving' => 'required|string|max:750',
            'wijngebied' => 'required|string|max:50',
            'wijnhuis' => 'required|string|max:50',
            'druivensoort' => 'required|string|max:50',
            'categorie' => 'required|string|max:50',
            'druivensoort' => 'required|string|max:50',
            'inhoud' => 'required|string|max:50',
            'serveren_op' => 'required|string|max:50',
            'ook_lekker_bij' => 'required|string|max:100'
        ];
    }
}

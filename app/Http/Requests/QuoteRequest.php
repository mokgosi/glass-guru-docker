<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            'reference' => 'required|digits:8',
            'cost' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'store_location' => 'required',

            'client_name' => 'required|max:100',
            'client_phone' => 'required|numeric|digits:10',

            'vin' => 'required|alpha_num|min:17|max:17',
            'make' => 'required|max:50',
            'model' => 'required|max:50',
            'year' => "required|date_format:Y",
            'registration' => 'required',
            'license_issue_date' => 'required|date|date_format:Ymd',
            'license_expiry_date' => 'required|date|date_format:Ymd|gt:license_issue_date|after:today',
        ];
    }
}

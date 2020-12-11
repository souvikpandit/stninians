<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryValidationRequest extends FormRequest
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
            'firstname' => 'required',
            'secondname' => 'required',
            'email' => 'required|unique:enquiries',
            'subject' => 'required',
            'description' => 'required',

        ];
    }
}

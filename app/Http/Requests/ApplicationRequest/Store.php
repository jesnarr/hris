<?php

namespace App\Http\Requests\ApplicationRequest;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'first_name' => 'required|regex:/^[\pL\s]+$/u',
            'last_name'  => 'required|regex:/^[\pL\s]+$/u',
            'email'  => 'required|email:rfc,dns',
            'contact_number'  => 'required|regex:/^09\d{9}$/',
            'resume'  => 'required|mimes:docx,doc,pdf',
            'available_start_date' => 'required|date:F d, Y',
            'referral' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'referral_email.required' => 'The referral field is required.',
            'file.required' => 'The Resume / CV field is required.',
        ];
    }
}

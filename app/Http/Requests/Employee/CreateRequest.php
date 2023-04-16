<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class CreateRequest extends FormRequest
{
    public const RULES = [
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'suffix' => 'nullable',
        'gender' => 'required',
        'birthdate' => 'required',
        'contact_number' => 'required',
        'marital_status' => 'required',
        'nationality' => 'required',
        'work_email' => 'required',
        'employee_type' => 'required',
        'employee_status' => 'required',
        'position' => 'required',
        'branch' => 'required',
        'image' => 'nullable|file|mimes:png,jpeg,jpg|max:4096',
    ];

    public const MESSAGES = [
        'employee_type.required' => 'The employment type is required.',
        'employee_status.required' => 'The employment status is required.',
    ];
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
    public function rules(): array
    {
        return static::RULES;
    }

    public function messages()
    {
        return static::MESSAGES;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobInformationRequest extends FormRequest
{
    public const RULES = [
        'employment_status' => 'required',
        'employment_type' => 'required',
        'position' => 'required',
        'join_date' => 'required',
        'probation_start_date' => 'required',
        'probation_end_date' => 'required',
        // 'contract_start_date' => 'required'
    ];

    // public const MESSAGES = [
    //     'employment_status.required' => 'Employment Status field is required.',
    //     'employment_type.required' => 'Employment Type field is required.'
    // ];
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
}

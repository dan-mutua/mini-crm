<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'nullable|numeric'
        ];
    }

    public function messages()
    {
    return [
        'first_name.required' => 'Please enter a first name.',
        'last_name.required' => 'Please enter a last name.',
        'email.required' => 'Please enter an email address.',
        'email.email' => 'Please enter a valid email address.',
        'phone.numeric' => 'The phone number must be a numeric value.'
        ];
    }

}

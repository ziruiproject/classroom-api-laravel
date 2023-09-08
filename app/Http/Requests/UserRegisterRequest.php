<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'username' => [
                // 'required',
                'string',
                'regex:/^[a-z_][a-z0-9_]{7,27}$/',
                'unique:users'
            ],
            'first_name' => [
                // 'required',
                'string',
                'regex:/^[A-Za-z]{3,15}$/'
            ],
            'last_name' => [
                // 'required',
                'string',
                'regex:/^[A-Za-z]{3,15}$/'
            ],
            'password' => [
                // 'required',
                'string',
                'min:8'
            ],
            'email' => [
                // 'required',
                'string',
                'email:strict,dns,spoof',
                'unique:users'
            ]
        ];

        if (request()->isMethod('post')) {
            array_push($rules['username'], 'required');
            array_push($rules['first_name'], 'required');
            array_push($rules['last_name'], 'required');
            array_push($rules['email'], 'required');
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'username.required' => 'Username is required!',
            'username.regex' => 'Username is not valid!',
            'username.unique' => 'Username already taken!',
            'first_name.required' => 'First name is required!',
            'first_name.regex' => 'First name is not valid!',
            'last_name.required' => 'Last name is required!',
            'last_name.regex' => 'Last name is not valid!',
            'password.required' => 'Password is required!',
            'password.min' => 'Min 8 characters!',
            'email.required' => 'Email is required!',
            'email.email' => 'Email is not valid!',
            'email.unique' => 'Email already taken!',
        ];
    }
}

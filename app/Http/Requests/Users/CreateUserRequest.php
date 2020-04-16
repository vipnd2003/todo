<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
        if ($this->method() == 'GET') {
            return [];
        }

        return [
            'name' => 'required|max:100',
            'email' => 'required|email|max:254|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'birthday' => 'required|date'
        ];
    }
}
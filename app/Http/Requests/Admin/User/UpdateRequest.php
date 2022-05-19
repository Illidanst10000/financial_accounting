<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:users,name',
            'role' => 'required|int',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You must fill this field',
            'name.unique' => 'This name already taken',
            'role.required' => 'You must select role',
        ];
    }
}

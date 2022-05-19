<?php

namespace App\Http\Requests\User\Earning;

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
            'amount' => 'required|int',
            'description' => 'nullable|string',
            'date' => 'required|string',
            'source_id' => 'required|integer|exists:sources,id',
            'type_id' => 'required|integer|exists:types,id',
        ];
    }

    public function messages()
    {
        return [
            'amount.required' => 'You must fill this field',
            'amount.int' => 'You must use int type',
            'date.required' => 'Select date',
            'source_id.required' => 'Select source',
            'source_id.exists' => 'This source is not exist in database',
            'type_id.required' => 'Select type',
            'type_id.exists' => 'This type is not exist in database',
        ];
    }
}

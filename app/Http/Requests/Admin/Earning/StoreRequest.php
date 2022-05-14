<?php

namespace App\Http\Requests\Admin\Earning;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'date' => 'string',
            'source_id' => 'required|integer|exists:sources,id',
            'type_id' => 'required|integer|exists:types,id',
        ];
    }
}

<?php

namespace App\Http\Requests\Admin\Spending;

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
            'date' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'type_id' => 'required|integer|exists:types,id',
            'tags_ids' => 'nullable|array',
            'tags_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
}

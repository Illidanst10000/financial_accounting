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
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'amount.required' => 'You must fill this field',
            'amount.int' => 'You must use int type',
            'date.required' => 'Select date',
            'category_id.required' => 'Select category',
            'category_id.exists' => 'This category is not exist in database',
            'type_id.required' => 'Select type',
            'type_id.exists' => 'This type is not exist in database',
            'tag_ids.exists' => 'This tags is not exist in database',
        ];
    }
}

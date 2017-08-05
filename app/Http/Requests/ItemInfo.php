<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemInfo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return true
     */
    public function authorize()
    {
        // the authorisation is checked with isAdmin middleware
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item_type_id' => 'required|integer|exists:item_types,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'isbn' => 'nullable|alphanumeric|max:13',
            'price' => 'nullable|numeric|min:0',
            'author' => 'required|string|max:255',
            'nsfw' => 'boolean',
        ];
    }
}

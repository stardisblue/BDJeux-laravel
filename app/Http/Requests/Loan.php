<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Loan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
            'item_id' => 'required|integer|exists:items,id',
            'status_id' => 'required|integer|exists:statuses,id',
            'user_id' => 'required|integer|exists:users,id',
            'date_begin' => 'required|date_format:"d/m/Y"',
            'date_end' => 'required|date_format:"d/m/Y"|after_or_equal:date_begin',
            'date_back' => 'nullable|date_format:"d/m/Y"|after_or_equal:date_begin',
        ];
    }
}

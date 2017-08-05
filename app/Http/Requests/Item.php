<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Item extends FormRequest
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
            'item_info_id' => 'required|integer|exists:item_infos,id',
            'item_state_id' => 'required|integer|exists:item_states,id',
            'user_id' => 'required|integer|exists:users,id',
            'allow_borrow' => 'nullable|boolean',
        ];
    }
}

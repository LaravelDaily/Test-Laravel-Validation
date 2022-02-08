<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
        // TASK: generate that StoreItemRequest class
    //   with authorization returning TRUE
    //   and validation rules: name is required, and description is required
        return [
            'name' => 'required',
            'description' => 'required'
        ];
    }
}

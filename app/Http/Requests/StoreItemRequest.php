<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //   with authorization returning TRUE
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        //   and validation rules: name is required, and description is required
        return [
            'name' => 'required',
            'description' => 'required',
        ];
    }
}

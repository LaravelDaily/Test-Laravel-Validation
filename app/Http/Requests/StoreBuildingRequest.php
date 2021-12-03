<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// TASK: Customize the validation error message to say "Please enter the name"
class StoreBuildingRequest extends FormRequest
{
    protected $redirectRoute = 'buildings.create';

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
        return [
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter the name'
        ];
    }
}

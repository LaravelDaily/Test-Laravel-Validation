<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuildingRequest extends FormRequest
{
    protected $redirectRoute = 'buildings.create';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please enter the name',
        ];
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: PayKun Two
 * Date: 02-12-2021
 * Time: 02:53 PM
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required'
        ];
    }
}
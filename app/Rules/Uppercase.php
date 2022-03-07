<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        return ucfirst($value) === $value;
    }

    public function message()
    {
        return 'The :attribute does not start with an uppercased letter';
    }
}
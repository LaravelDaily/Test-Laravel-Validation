<?php

namespace App\Rules;


use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the first letter of the title is uppercase
        return ctype_upper(substr($value, 0, 1));
    }

    public function message()
    {
        // Set the error message for the validation rule
        return 'The title does not start with an uppercased letter';
    }
}
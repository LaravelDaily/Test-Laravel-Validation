<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the first letter of the value is uppercase
        return ctype_upper(mb_substr($value, 0, 1));
    }

    public function message()
    {
        return 'The :attribute must start with an uppercased letter.';
    }
}

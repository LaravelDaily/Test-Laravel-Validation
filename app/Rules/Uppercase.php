<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class Uppercase implements Rule
{
    public function passes($attribute, $value)
    {
        return $value === Str::ucfirst($value);
    }

    public function message()
    {
        return 'The title does not start with an uppercased letter';
    }
}

<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return is_string($value) && !empty($value) && strtoupper($value[0]) === $value[0];
    }

    /**
     * @return array|string
     */
    public function message()
    {
        return 'The :attribute does not start with an uppercased letter';
    }
}

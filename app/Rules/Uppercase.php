<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
// class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    // public function validate(string $attribute, mixed $value, Closure $fail): void
    // {
    //     if (strtoupper($value) !== $value) {
    //         $fail('The :attribute does not start with an uppercased letter');
    //     }
    // }

    public function passes($attribute, $value)

    {
        $first_letter = substr($value, 0, 1);

        return strtoupper($first_letter) === $first_letter;
    }



    /**

     * Get the validation error message.

     *

     * @return string

     */

    public function message()

    {

        return 'The :attribute does not start with an uppercased letter';

    }
}

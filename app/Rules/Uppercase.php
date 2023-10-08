<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // It should check whether title's first letter is uppercase
        if (ucfirst($value[0]) != $value[0]) {
            $fail('The :attribute does not start with an uppercased letter');
        }
    }
}

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
        $firstLetterUpper = strtoupper($value[0]) . substr($value, 1);
        if ($firstLetterUpper !== $value) {
            $fail('The :attribute does not start with an uppercased letter');
        }
    }
}

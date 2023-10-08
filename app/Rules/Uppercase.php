<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $firstLetter = mb_substr($value, 0, 1);
        if (ctype_upper($firstLetter) !== true) {
            $fail('The title does not start with an uppercased letter');
        }
    }
}

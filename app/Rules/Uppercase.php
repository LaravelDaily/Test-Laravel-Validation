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
        // some other rules (can applied):
        // ucfirst($value) !== $value
        // strtoupper($value[0]) !== $value[0]
        // strtoupper(substr($value, 0, 1)) !== substr($value, 0, 1)
        // $value !== Str::ucfirst($value)
        // !ctype_upper(substr($value, 0, 1))

        if(preg_match('/^[^A-Z].*/', $value)) {
            $fail("The $attribute does not start with an uppercased letter");
        }
    }
}

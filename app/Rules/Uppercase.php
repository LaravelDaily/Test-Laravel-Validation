<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ImplicitRule;

class Uppercase implements ImplicitRule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return ctype_upper($value[0]);
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

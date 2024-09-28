<?php
/**
 * Created by PhpStorm.
 * User: PayKun Two
 * Date: 02-12-2021
 * Time: 03:03 PM
 */

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
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
        return 'The title does not start with an uppercased letter';
    }
}
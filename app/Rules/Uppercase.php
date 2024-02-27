<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    public function passes($attribute, $value)
    {
        // 檢查標題的第一個字母是否為大寫
        return ctype_upper(substr($value, 0, 1));
    }

    public function message()
    {
        return 'The title does not start with an uppercased letter';
    }
}

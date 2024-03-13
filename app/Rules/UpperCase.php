<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpperCase implements ValidationRule
{
    private $attribute = null;
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
    public function passes($attribute, $value)
    {
        $this->attribute = $attribute;
        dd($attribute);
        die();
        if ($value === mb_strtoupper($value, 'UTF-8')) {
            return true;
        }
        return false;
    }

    public function message()
    {
        $customMessage = 'vaidation.custom'.($this->attribute).'product_name.uppercase';

        if (trans($customMessage) != $customMessage) {
            return trans($customMessage);
        }
        return trans('vaidation.uppercase');
    }
}

<?php

namespace Modules\CommonModule\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidationNumber implements Rule
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
        $this->attribute = $attribute;
        $check = array_filter($value,function($value){if(is_numeric($value)||is_null($value)) return true; else return false; });

        return count($check)==0 || count($check) == count($value) ;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.numeric',['attribute'=>__('general.'.$this->attribute)]);
    }
}

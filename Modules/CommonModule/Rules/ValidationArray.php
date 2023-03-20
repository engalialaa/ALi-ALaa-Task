<?php

namespace Modules\CommonModule\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidationArray implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($count)
    {
        $this->count = $count;
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
        return collect($value)->flatten()->filter()->count() == $this->count;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.required',['attribute'=>__('general.'.$this->attribute)]);
    }
}

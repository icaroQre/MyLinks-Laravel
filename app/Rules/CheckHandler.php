<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class CheckHandler implements Rule
{
    /**
     * The error message.
     *
     * @var string
     */
    protected $errorMessage;

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

        if(!preg_match('/^@([a-zA-Z0-9_-]+$)/', $value, $matches)){
            $this->errorMessage = 'O link deve iniciar com @,conter apenas letras, números, _ e -, sem espaços';
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->errorMessage;
    }
}

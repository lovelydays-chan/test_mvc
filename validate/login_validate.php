<?php

namespace Validate;

use Lnw\Core\Validate;

class LoginValidate extends Validate
{
    protected $locale = 'th';

    protected function rules()
    {

        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }
    protected function messages()
    {
        return [];
    }
    protected function attributes()
    {
        return [];
    }
}

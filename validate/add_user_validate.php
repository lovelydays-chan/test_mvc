<?php

namespace Validate;

use Lnw\Core\Validate;

class AddUserValidate extends Validate
{
    protected $locale = 'th';

    protected function rules()
    {

        return [
            'name' => 'required|min:3',
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

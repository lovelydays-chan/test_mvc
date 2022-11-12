<?php

namespace Validate;

use Lnw\Core\Validate;

class ShareAddValidate extends Validate
{
    protected $locale = 'th';

    protected function rules()
    {

        return [
            'title' => 'required',
            'body' => 'required',
            'link' => 'required',
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

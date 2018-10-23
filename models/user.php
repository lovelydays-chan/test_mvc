<?php

use Lnw\Core\Model;

class UserModel extends Model
{
    public $timestamps = false;
    protected $fillable = [
            'name',
            'email',
            'password',
    ];
    protected $table = 'users';
}

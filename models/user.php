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

    public function shares()
    {
        return $this->hasMany('shareModel', 'user_id');
    }
}

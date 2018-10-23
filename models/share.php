<?php

use Lnw\Core\Model;

class ShareModel extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'link',
        'create_date',
    ];
    protected $table = 'shares';
}

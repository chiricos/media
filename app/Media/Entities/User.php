<?php

namespace App\Media\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name', 'last_name','username','email', 'password','identification','password','phone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

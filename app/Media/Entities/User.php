<?php

namespace App\Media\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name', 'last_name','email', 'password','identification','password','phone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['password']= bcrypt($value);
        }
    }

    public function products()
    {
        return $this->hasMany('App\Media\Entities\Product');
    }
}

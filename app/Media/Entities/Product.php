<?php

namespace App\Media\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
      'name','color','volume','price','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Media\Entities\User');
    }

}



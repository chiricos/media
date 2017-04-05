<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'                  =>  'required',
            'last_name'             =>  'required',
            'email'                 =>  'required|email|unique:users',
            'password'              =>  'required',
            'confirmation_password' =>  'required|same:password',
            'identification'        =>  'required|unique:users|min:1|numeric',
            'phone'                 =>  'numeric|required|min:1|digits_between:7,10'
        ];
    }
}


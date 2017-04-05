<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'      =>  'required',
            'color'     =>  'required',
            'volume'    =>  'required|min:1|numeric',
            'price'     =>  'required|min:1|numeric'
        ];
    }
}

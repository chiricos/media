<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    /*
     * Edward diaz
     *
     * doy permiso de utilizar el request
     * y hago los validaciones del formulario producto
     */

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

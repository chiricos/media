<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Media\Entities\User;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{

    public function inicio()
    {
        return view('template.inicio');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function createUser()
    {
        return view('back.user.create');
        if(\Auth::check()){
            return redirect()->route('inicio')->with('message_error','No te puedes registrar porque ya esta logeado');
        }else{

        }

    }

    public function store(UserRequest $request )
    {
        $user = new User($request->all());
        $user->save();
        $userdata = [
            'email'     =>  $request->email,
            'password'  =>  $request->password
        ];

        if (\Auth::attempt($userdata)) {

            return redirect()->route('inicio')->with('message','El usuario '.$user->name.' fue creado exitosamente');
        }
        return redirect()->back()->with('message','El usuario '.$user->name.' fue creado exitosamente');
    }
}

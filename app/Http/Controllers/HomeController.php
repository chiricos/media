<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Media\Entities\User;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{

    /*
     * Edward diaz
     */

    /*
     * Esta es la pagina inicial que esta disponible para todos pero solo da la bienvenida
     * no contiene datos vulnerables
     */
    public function inicio()
    {
        return view('template.inicio');
    }

    /*
     * Inidico el login
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /*
     * Visualiza el formulario para registrarse
     */
    public function createUser()
    {
        return view('back.user.create');
    }

    /*
     * Guarda los datos del usuario que se acaba de registrar
     * y luego lo logea y lo devuelve al inicio
     */
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

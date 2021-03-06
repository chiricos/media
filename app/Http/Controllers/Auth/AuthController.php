<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /*
     * Edward diaz
     * Redirecciono cuando se inicia sesión
     */

    protected $redirectTo = 'inicio';

    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /*
     * Edward Diaz
     * Redirecciono cuando se cierra sesión
     */

    public function getLogout()
    {
        \Auth::logout();
        return Redirect()->route('home')->with('message_error', 'La sesión se cerro');
    }

    /*
     * Edward Diaz
     * Indico en donde esta la vista login para visualizarla en la ruta /
     */
    public function getLogin()
    {
        return view('template.login');
    }


}

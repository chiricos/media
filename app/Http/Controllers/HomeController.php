<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Media\Entities\User;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function getLogin()
    {
        return view('template.login');
    }

    public function createUser()
    {
        return view('back.user.create');
    }

    public function store(UserRequest $request )
    {
        dd($request->all());
    }
}

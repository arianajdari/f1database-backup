<?php

namespace App\Http\Controllers\UserControllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;

class UserLoginController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }

    public function login(UserLoginRequest $request)
    {
    	if (Auth::attempt([
    		'email' => $request->email,
    		'password' => $request->password
    	], $request->has('remember') ? true : false )) {
            return redirect('/dashboard');
        }

    	return redirect('/');
    }
}

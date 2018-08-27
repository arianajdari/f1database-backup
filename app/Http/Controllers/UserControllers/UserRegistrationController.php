<?php

namespace App\Http\Controllers\UserControllers;

use Auth;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistrationRequest;

class UserRegistrationController extends Controller
{
	public function index()
	{
		return view('auth.register');
	}

    public function register(UserRegistrationRequest $request)
    {
    	$user = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    	]);

    	Auth::login($user);

    	return redirect('/');
    }
}

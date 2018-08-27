<?php

namespace App\Http\Controllers\UserControllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserResetRequest;

class UserResetController extends Controller
{
    public function index($token)
    {
        return view('auth.reset', [
        	'password_reset' => $token,
        ]);
    }

    public function reset(UserResetRequest $request)
    {
    	$tokenizer = PasswordReset::where('token', $request->password_reset)->first();

		User::where('email', $tokenizer->email)->update([
			'password' => Hash::make($request->password),
		]);

		PasswordReset::where('token', $request->password_reset)->delete();

		return redirect('/login')->with([
            'password_reset_success' => 'You have successfully reset your password. Now, you can login.'
        ]);
    }
}

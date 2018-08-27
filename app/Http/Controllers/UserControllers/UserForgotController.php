<?php

namespace App\Http\Controllers\UserControllers;

use DB;
use Mail;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Mail\PasswordResetMail;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserForgotRequest;

class UserForgotController extends Controller
{
    public function index()
    {
    	return view('auth.forgot');
    }

    public function sendEmail(UserForgotRequest $request)
    {
    	$email = $request->email;

        $user = User::where('email', $email)->first();

        if ($user == null) {
            return redirect()->back()->with([
                'invalid_email_error' => 'This e-mail does not exist in our database. ']);
        }

    	$tokenizer = PasswordReset::where('email', $email)->first();

    	if ($tokenizer != null) {
			
			if (Carbon::now()->diffInHours($tokenizer->created_at) >= 1) {
				
				$token = $this->recreateToken($email, 64);

				$user = User::where('email', $email)->first();

    			Mail::to('arianajdari23@gmail.com')->queue(new PasswordResetMail($user, $token));
			} else {
                return redirect()->back()->with([
                    'invalid_token' => 'You have already requested a password reset e-mail. Check your inbox.'
                ]);
            }

    	} else {

    		$token = $this->createToken($email, 64);

    		$user = User::where('email', $email)->first();

    		Mail::to('arianajdari23@gmail.com')->queue(new PasswordResetMail($user, $token));
    	}
    	
    	return redirect()->back()->with([
            'success_token' => 'An email containing password request has been sent to you. Check your inbox',
        ]);
    }

    protected function createToken($email, $length = 64)
    {
    	$password_reset = PasswordReset::create([
    			'email' => $email,
    			'token' => str_random($length),
    	]);

    	return $password_reset->token;
    }

    protected function recreateToken($email, $length = 64)
    {
    	DB::table('password_resets')->where('email', $email)->delete();

    	$password_reset = PasswordReset::create([
    		'email' => $email,
    		'token' => str_random($length),
    	]);

    	return $password_reset->token;
    }

}

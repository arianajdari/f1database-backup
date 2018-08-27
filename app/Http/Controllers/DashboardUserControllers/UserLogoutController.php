<?php

namespace App\Http\Controllers\DashboardUserControllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLogoutController extends Controller
{
    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}

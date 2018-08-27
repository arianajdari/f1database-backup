<?php

namespace App\Http\Controllers\DashboardControllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard.index', [
    		'user' => Auth::user()
    	]);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\PasswordReset;

class CheckExpired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Carbon::now()->diffInHours(PasswordReset::where('token', $request->password_reset)->first()->created_at) >= 1) {
            return redirect('/forgot')->with(['token_expired' => 'Password reset token has expired. You can request a new one here.']);
        }

        return $next($request);
    }
}

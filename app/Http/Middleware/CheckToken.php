<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\PasswordReset;

class CheckToken
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
        if (is_null(PasswordReset::where('token', $request->token)->first())) {
            return redirect('/forgot')->with(['token_not_exits' => 'Password reset token does not exist. Try creating new one instead.']);
        } else if (Carbon::now()->diffInHours(PasswordReset::where('token', $request->token)->first()->created_at) >= 1) {
            return redirect('/forgot')->with(['token_expired' => 'Password reset token has expired. You can request a new one here.']);
        }
        
        return $next($request);
    }
}

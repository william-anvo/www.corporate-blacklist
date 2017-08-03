<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
     if (!(Auth::user() &&  Auth::user()->is_admin == 1 && Auth::user()->acc_status == 1 )) {
            return redirect('/home');
     }

            return $next($request);            
    }
}

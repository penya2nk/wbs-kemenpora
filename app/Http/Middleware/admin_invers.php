<?php

namespace rni\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin_invers
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
        if(Auth::user() && Auth::user()->roleId > 1){
            return redirect('/adminpanel');
        }
        return $next($request);
    }
}

<?php

namespace rni\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class operator
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
        if(Auth::user() && Auth::user()->roleId == 2){
            return $next($request);
        }
        return redirect('/adminpanel');
    }
}

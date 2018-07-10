<?php

namespace rni\Http\Middleware;

use Closure;
use Auth;

class super
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
        if(Auth::user() && Auth::user()->roleId == 4){
            return $next($request);
        }
        return redirect('/adminpanel');
    }
}

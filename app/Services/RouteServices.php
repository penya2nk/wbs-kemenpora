<?php
namespace rni\Services;

use Illuminate\Support\Facades\Auth;
use rni\User;

class RouteServices
{
    static function cekAdmin(){
        //if(Auth::user() && Auth::user()->roleId > 1){
            return redirect('/adminpanel');
        //}
    }
}
<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use rni\Http\Requests;

class BuatLaporanController extends Controller
{
    //
    public function getUrl(){
        if(Auth::guest()){
            return route('login');
        }else{
            return route('buat-pelaporan');
        }
    }
}

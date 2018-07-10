<?php

namespace rni\Http\Controllers\Admin\Super;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;

class BaseController extends Controller
{
    //
    function __construct(){

        $this->middleware('super');

    }
}

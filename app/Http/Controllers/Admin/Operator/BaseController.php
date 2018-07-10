<?php

namespace rni\Http\Controllers\Admin\Operator;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Operator\BaseController;

class BaseController extends Controller
{
    //
    function __construct(){

        $this->middleware('operator');

    }
}

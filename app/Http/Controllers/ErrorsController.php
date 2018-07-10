<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;

use rni\Http\Requests;

class ErrorsController extends Controller
{
    //
//    $protected errpar;

    public function getErrorInfo($id){
        return $id;
    }
}

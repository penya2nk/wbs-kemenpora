<?php

namespace rni\Http\Controllers\Admin\Super;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Super\BaseController;
use rni\User;
use Auth;

class SiteController extends BaseController
{
    //
    public function indexUser(){

    	//$dataUser = '/adminpanel/super/user/get';   

    	$user = User::with('role')->where('id','<>',Auth::user()->id)->get(); 	

    	return view('adminpanel.super.user.index', compact('user'));

    }

    public function addUser(){
    	return view('adminpanel.super.user.add');
    }

    public function editUser($id){
       
        $user = User::findorFail($id);

        return view('adminpanel.super.user.edit', compact('user'));
    }
}

<?php

namespace rni\Http\Controllers\Admin\Super\User;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Super\BaseController;
use rni\Http\Requests\Admin\Super\UserRequest;
use rni\Http\Requests\Admin\Super\UserEditRequest;
use rni\User;

class DataController extends Controller
{
    //
    public function create(UserRequest $request){

    	$request['password'] = bcrypt($request['password']);

    	User::create($request->all());

    	return redirect(route('super.user'));
    }

    public function update($id, UserEditRequest $request){

        $user = User::findorFail($id);

        if($request['password'] != null){

        	$request['password'] = bcrypt($request['password']);

        	$user->update($request->all());

    	}else{

    		$user->update($request->except('password'));

    	}
       
        return redirect(route('super.user'));
    }

    public function delete($id){

    	$user = User::findorFail($id);

    	$user->delete();

    	return redirect(route('super.user'));
    
    }
}

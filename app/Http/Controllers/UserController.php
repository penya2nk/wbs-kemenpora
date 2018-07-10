<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Requests\UbahProfilRequest;
use rni\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function edit(){
       
        $user = User::findorFail(Auth::user()->id);

        // return view('pages.userSite.ubah-profil', compact('user'));
        return view('public-pages.ubah-profil', compact('user'));
    }

    public function update($id, UbahProfilRequest $request){
        $user = User::findorFail($id);

        $user->update($request->all());

        $request->session()->flash('status','success');
        $request->session()->flash('msg','Data Berhasil Tersimpan.');

        return redirect(route('user.ubah-profil',['id'=>$id]));
    }

    //
    public function editPassword(){
       
        $user = User::findorFail(Auth::user()->id);

        return view('public-pages.ubah-password', compact('user'));
    }

    public function updatePassword($id, Request $request){
        
        $this->validate($request, [                                        
                    'password' => 'required|alphanum|min:6|confirmed'
                ]);

        $user = User::findorFail($id);

        $user->password = bcrypt($request->password);
        $user->save();

        $request->session()->flash('status','success');
        $request->session()->flash('msg','Data Berhasil Tersimpan.');

        return redirect(route('user.ubah-password',['id'=>$id]));
    }

    public function editEmail(){
       
        $user = User::findorFail(Auth::user()->id);

        return view('public-pages.ubah-email', compact('user'));
    }

    public function updateEmail($id, Request $request){
        
        $this->validate($request, [                                        
                    'email' => 'required|unique:users,email'
                ]);

        $user = User::findorFail($id);

        $user->email = $request->email;
        $user->save();

        $request->session()->flash('status','success');
        $request->session()->flash('msg','Data Berhasil Tersimpan.');

        return redirect(route('user.ubah-email',['id'=>$id]));
    }

}

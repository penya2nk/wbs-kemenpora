<?php

namespace rni\Http\Controllers\Admin\Super\Kategori;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Super\BaseController;
use rni\Http\Requests\Admin\Super\UserRequest;
use rni\Http\Requests\Admin\Super\UserEditRequest;
use rni\User;
use rni\KategoriLaporan;

class KategoriLaporanController extends Controller
{
    //
	public function index(){
		return view('adminpanel.super.kategori.index')->with('recKategoriLaporan',KategoriLaporan::all());
	}	

	public function create(){
		return view('adminpanel.super.kategori.create');
	}

	public function edit($id){
		return view('adminpanel.super.kategori.edit')->with('recKategoriLaporanByID',KategoriLaporan::find($id));
	}

    public function store(Request $request){

    	$this->validate($request, [
	        'kategori' => 'required|max:255'
	    ]);

    	$store = new KategoriLaporan;
    	$store->kategori = $request->kategori;
    	$store->deskripsi = $request->deskripsi;
    	$store->save();

    	return redirect(route('super.pengaturan.kategori'));
    }

    public function update($id, Request $request){
    	
    	$this->validate($request, [
	        'kategori' => 'required|max:255'
	    ]);

        $update = KategoriLaporan::findorFail($id);

        $update->kategori = $request->kategori;
    	$update->deskripsi = $request->deskripsi;
    	$update->save();
       
    	return redirect(route('super.pengaturan.kategori'));
    }

    public function delete($id){

    	$kategori = KategoriLaporan::findorFail($id);

    	$kategori->delete();

    	return redirect(route('super.pengaturan.kategori'));    
    }
}

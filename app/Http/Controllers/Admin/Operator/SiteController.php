<?php

namespace rni\Http\Controllers\Admin\Operator;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Operator\BaseController;
use rni\LaporanLain;

class SiteController extends BaseController
{

    public function inputLaporan(){
    	return view('adminpanel.operator.input-laporan');
    }

    public function editLaporan($id){
    	$laporan = LaporanLain::findOrFail($id);

    	$statusLaporan = LaporanLain::findOrFail($id)->status_laporan;

    	return view('adminpanel.operator.edit-laporan', compact('laporan'))->with('statusLaporan',$statusLaporan);
    }

    public function kirimLaporan($id){
    	$update = LaporanLain::findOrFail($id);

    	$update->statusId = 3;
    	$update->save();

        return redirect(route('laporan.laporan-detail-alt',['id'=>$id]));
    }
}

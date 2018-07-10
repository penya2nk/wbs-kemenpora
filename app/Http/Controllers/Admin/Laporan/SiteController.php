<?php

namespace rni\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Laporan\BaseController;
use rni\LaporanWeb;
use rni\LaporanLain;
use rni\BuktiLaporanWeb;
use Illuminate\Support\Facades\Auth;

class SiteController extends BaseController
{

    public function laporanWebMember(){
        $laporan = LaporanWeb::with('kategori_laporan','status_laporan')->get();

        if(Auth::user()->roleId==3){
            $laporan = LaporanWeb::with('kategori_laporan','status_laporan')->where('statusId','>=',3)->get();
        }

    	return view('adminpanel.laporan.laporan-web-member', compact('laporan'));
    }

    public function laporanWebNonMember(){
        $laporan = LaporanLain::with('kategori_laporan','status_laporan','jalur_laporan')->where('jalurId','=',1)->get();

        if(Auth::user()->roleId==3){
            $laporan = LaporanLain::with('kategori_laporan','status_laporan','jalur_laporan')->where('jalurId','=',1)->where('statusId','>=',3)->get();
        }

    	return view('adminpanel.laporan.laporan-web-nonmember', compact('laporan'));
    }

    public function laporanNonWebsite(){
        $laporan = LaporanLain::with('kategori_laporan','status_laporan','jalur_laporan')->where('jalurId','>=',1)->get();

        if(Auth::user()->roleId==3){
            $laporan = LaporanLain::with('kategori_laporan','status_laporan','jalur_laporan')->where('jalurId','>=',1)->where('statusId','>=',3)->get();
        }

    	return view('adminpanel.laporan.laporan-non-website', compact('laporan'));
    }

    public function laporanDetail($id){
        $laporan = LaporanWeb::where('id',$id)->first();

        $member = LaporanWeb::find($id)->detail_member;

        $bukti = BuktiLaporanWeb::where('laporanWebID',$id)->get();

        return view('adminpanel.laporan.laporan-detail', compact('laporan'), compact('member'))->with('bukti',$bukti);

    }

    public function laporanDetailAlt($id){

        $laporan = LaporanLain::where('id',$id)->first();

        return view('adminpanel.laporan.laporan-detail-alt', compact('laporan'));

    }

    public function laporanDetailAlt2($id){

        $laporan = LaporanLain::where('id',$id)->first();

        return view('adminpanel.laporan.laporan-detail-alt-2', compact('laporan'));

    }
}

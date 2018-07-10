<?php

namespace rni\Http\Controllers\Admin;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\BaseController;
use rni\LaporanWeb;
use rni\LaporanLain;
use Yajra\Datatables\Facades\Datatables;

class SiteController extends Controller
{
    //
    public function adminPanel(){    	

    	$laporan = LaporanWeb::with('kategori_laporan','status_laporan')->get();
    	$laporan2 = LaporanLain::with('kategori_laporan','status_laporan','jalur_laporan')->get();

        return view('adminpanel.dashboard.home', compact('laporan','laporan2'));
    }


}

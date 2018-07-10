<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Requests\LaporanWebRequest;
use rni\LaporanWeb;
use rni\User;
use rni\BuktiLaporanWeb;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;
use rni\Services\GlobalServices;
use rni\Http\Controllers\MailController;
use Webpatser\Uuid\Uuid;

class LaporanWebController extends Controller
{
    //
    public function create(LaporanWebRequest $request){

//        $laporan = new LaporanWeb;

        

//        return view('pages.userSite.tesData', compact('request'));

        $this->validate($request, [                                        
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',                            
                ]);

        $user = User::findOrFail(Auth::user()->id);

        $user->address = $request['address'];
        $user->phoneNumber = $request['phoneNumber'];
        $user->handphoneNumber = $request['handphoneNumber'];
        $user->identityNumber = $request['identityNumber'];

        $user->save();

        $carbon_now = Carbon::now();
        $no_reg = Carbon::parse($carbon_now)->format('dmyHis');
        $request['noRegistrasi'] = $no_reg;

        //Uuid
        $request['uuid'] = Uuid::generate();
        //

        LaporanWeb::create($request->all());

        // Send Email

        $global_service = new GlobalServices;
        $informasi = "Disertakan (Tidak Dirahasiakan)";
        if($request['kategoriPengirim']==2) $informasi = "Dirahasiakan";

        $dataEmail = array('no_registrasi'=>$request['noRegistrasi'],'created_at'=>Carbon::parse($carbon_now)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($request['kategoriLaporan']),'deskripsi_singkat'=>$request['deskripsiSingkat'],'deskripsi'=>$request['deskripsi'],'informasi'=>$informasi);

        $mc = new MailController;

        $mc->sendEmail('emails.laporan-dibuat','rni.wbs.support@reandabernardi.com','WBS RNI',Auth::user()->email,Auth::user()->fullname,'[WBS] Informasi laporan telah dibuat',$dataEmail);

        $mc->sendEmail('emails.laporan-forward','rni.wbs.support@reandabernardi.com','WBS RNI','operator.rni@reandabernardi.com','Reanda Bernardi','[WBS] Informasi laporan masuk',$dataEmail);

        //

        return view('partials.pelaporan.sukses');
    }

    public function index(){

//        $laporan = LaporanWeb::with('kat_lap')->get();
//        $laporan = LaporanWeb::with('kat_lap')->get();

//        return view('pages.userSite.lihat-laporan', compact('laporan'));

//        $laporan = LaporanWeb::with(['kat_lap' => function($query) {
//            $query->select('id','kategori');
//        }])->get(['id','kategori']);

////        $laporan = LaporanWeb::with('kat_lap','stat_lap')->where('userId',Auth::user()->id)->select('id','deskripsi','deskripsiSingkat','created_at','kategoriLaporan as katLaporan','statusId as statLaporan');

//        return view('pages.userSite.lihat-laporan', compact('laporan'));

        $laporan = LaporanWeb::with('kategori_laporan','status_laporan')->where('userId',Auth::user()->id)->get();

        // return view('pages.userSite.lihat-laporan', compact('laporan'));
        return view('public-pages.lihat-laporan', compact('laporan'));
    }

    public function getData(){

//        $laporan = LaporanWeb::all()->with('kategori_laporan')->get();
//        $laporan = LaporanWeb::with('kat_lap','stat_lap')->where('userId',Auth::user()->id)->select('id','deskripsi','deskripsiSingkat','created_at','kat_lap.kategori as katLaporan','stat_lap.status as statLaporan');

        $laporan = LaporanWeb::with('kategori_laporan','status_laporan')->where('userId',Auth::user()->id)->get();

        return Datatables::of($laporan)->make(true);

    }

    public function show($id){

        $laporan = LaporanWeb::where('id',base64_decode($id))->first();
        $bukti = BuktiLaporanWeb::where('laporanWebID',base64_decode($id))->get();

        // return view('pages.userSite.detail-laporan', compact('laporan'));
        return view('public-pages.detail-laporan', compact('laporan'),compact('bukti'));
    }
}

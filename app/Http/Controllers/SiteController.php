<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\LaporanWeb;
use rni\MasterStatus;
use rni\Faq;
use rni\Http\Controllers\MailController;
use Webpatser\Uuid\Uuid;

class SiteController extends Controller
{

    public function home(){
        return view('public-pages.beranda');
    }

    public function tentang(){
        return view('public-pages.tentang');
    }

    public function pelaporan(){
        return view('public-pages.pelaporan');
    }

    public function faq(){
        return view('public-pages.faq')->with('recFaq',FaQ::where('active',1)->orderBy('noUrut','asc')->get());
    }

    public function caraLapor(){
        return view('public-pages.cara-lapor');
    }

    public function suksesDaftar(){
        // return view('pages.userSite.sukses-daftar');
        return view('public-pages.sukses-daftar');
    }

    public function daftar(){
        return view('public-pages.daftar');
    }

    public function loginPage(){
        return view('public-pages.login');
    }

    public function loginPageTPK(){
        return view('public-pages.login-tpk');
    }

    public function buatPelaporanWL(){
        return view('public-pages.buat-pelaporan');
    }

    public function buatPelaporanWlMember(){
        return view('pages.publicSite.buat-pelaporan-member');
    }

    //Users Site

    public function buatPelaporan(){
        return view('public-pages.buat-pelaporan');
    }

    public function member(){
        return view('pages.userSite.member');
    }

    //

    public function em(){

        $mc = new MailController;

        $data = array('name'=>'Yoga');
        
        $mc->sendEmail('emails.laporan-dibuat','rni.wbs.support@reandabernardi.com','WBS RNI','dirgantaradwiyoga@gmail.com','Dwi Yoga','[WBS] Informasi laporan telah dibuat',$data);

        return "OK";
    }

    static function uuid(){
        $uuid = Uuid::generate();
        return $uuid;
    }

    public function updateStatus(){
        $data = MasterStatus::findorFail('4');
        $data->status = 'Sedang Diproses';
        $data->save();

        $data = MasterStatus::findorFail('5');
        $data->status = 'Tidak Terbukti';
        $data->save();

        $data = MasterStatus::findorFail('6');
        $data->status = 'Selesai';
        $data->save();

        return $data->status;
    }

}

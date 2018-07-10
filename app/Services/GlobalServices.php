<?php
namespace rni\Services;

use rni\KategoriLaporan;
use rni\MasterStatus;
use rni\MasterJalur;
use rni\LaporanWeb;
use rni\LaporanLain;
use rni\KonfirmasiLaporan;
use rni\User;
use rni\Roles;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class GlobalServices
{
    static function getKategoriList(){

        $k = array();
        foreach (KategoriLaporan::all() as $key=>$value){
            $k[$value->id] = $value->kategori;
        }

        return $k;
    }

    static function getJalurList(){

        $k = array();
        foreach (MasterJalur::where('jalur','<>','Website')->get() as $key=>$value){
            $k[$value->id] = $value->jalur;
        }

        return $k;
    }

    static function getRoles(){

        $k = array();
        foreach (Roles::all() as $key=>$value){
            $k[$value->id] = $value->role;
        }

        return $k;
    }

    static function getKategori($id){

        $s = KategoriLaporan::where('id',$id)->first();

        return $s->kategori;
    }

    static function getStatus($id){

        $s = MasterStatus::where('id',$id)->first();

        return $s->status;
    }

    static function getJalur($id){

        $s = MasterJalur::where('id',$id)->first();

        return $s->jalur;
    }

    static function cekLaporanUser($user){

        if(LaporanWeb::where('userId',$user)->count()<1){
            return false;
        }else{
            return true;
        }

    }

    static function getUserLaporan($id){
        $u = User::where('id',$id)->first();
        return $u;
    }

    static function getFiles($path){
        // $lm_path = substr($path,0,60);
        $true_path = "uploadFiles"."/".$path;
        
        $files = Storage::files($true_path);
        $res = "";
        if(empty($files)){
            $res = "null";
        }else{
            foreach ($files as $file) {
                $res .= " " . $file;
            }
        }

        return $files;
    }

    static function getFileSize($file){
        $size = Storage::size($file);

        if ($size >= 1073741824)
        {
            $size = number_format($size / 1073741824, 2) . ' GB';
        }
        elseif ($size >= 1048576)
        {
            $size = number_format($size / 1048576, 2) . ' MB';
        }
        elseif ($size >= 1024)
        {
            $size = number_format($size / 1024, 2) . ' KB';
        }
        elseif ($size > 1)
        {
            $size = $size . ' bytes';
        }
        elseif ($size == 1)
        {
            $size = $size . ' byte';
        }
        else
        {
            $size = '0 bytes';
        }

        return $size;
    }

    static function countLaporanWeb(){
        return LaporanWeb::count();
    }

    static function countLaporanNonWeb(){
        return LaporanLain::count();
    }

    static function countWebStatus(){
        $res = '';
    
            $res .= LaporanWeb::where('statusId','=','6')->count() . ',';
            $res .= LaporanWeb::where('statusId','=','5')->count() . ',';
            $res .= LaporanWeb::where('statusId','=','4')->count() . ',';
            $res .= LaporanWeb::where('statusId','=','3')->count() . ',';
            // $res .= LaporanWeb::where('statusId','=','2')->count() . ',';
            $res .= LaporanWeb::where('statusId','=','1')->count();
        
        
        return $res;
    }

    static function countNonWebStatus(){
        $res = '';
    
            $res .= LaporanLain::where('statusId','=','6')->count() . ',';
            $res .= LaporanLain::where('statusId','=','5')->count() . ',';
            $res .= LaporanLain::where('statusId','=','4')->count() . ',';
            $res .= LaporanLain::where('statusId','=','3')->count() . ',';
            // $res .= LaporanLain::where('statusId','=','2')->count() . ',';
            $res .= LaporanLain::where('statusId','=','1')->count();
        
        
        return $res;
    }

    static function getInterval(){
        $cw = LaporanWeb::count();
        $cnw = LaporanLain::count();

        $res = $cw;

        if($res < $cnw) $res = $cnw;

        if($res>=1000000){
            $res = 100000;
        }elseif($res>=100000){
            $res = 10000;
        }elseif($res>=10000){
            $res = 1000;
        }elseif($res>=1000){
            $res = 100;
        }elseif($res>=500){
            $res = 50;
        }elseif($res>=50){
            $res = 10;
        }elseif($res>=20){
            $res = 5;
        }elseif($res>=10){
            $res = 2;
        }else{
            $res = 1;
        }


        return $res;
    }

    // static function detailLaporan($var1){
    //     return $var1;
    // }

    static function noRegistrasi(){
        $res = Carbon::parse(Carbon::now())->format('dmyHis');

        return $res;
    }

    static function getYear(){
        $res = ['2016'=>'2016','2017'=>'2017'];

        return $res;
    }

    static function getMonth(){
        $res = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

        $res2 = ['1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'];

        return $res2;
    }

    static function getNow(){
        return Carbon::parse(Carbon::now())->format('m/d/Y');
    }

    static function getNowTm(){
        return Carbon::parse(Carbon::now())->format('Y/m/d H:i');
    }

    static function nonGetFirst(){
        $laporan = LaporanLain::orderBy('created_at', 'asc')->first();

        if($laporan == null){
            return null;
        }

        return Carbon::parse($laporan->created_at)->format('m - Y');
    }

    static function nonGetLast(){
        $laporan = LaporanLain::orderBy('created_at', 'desc')->first();

        if($laporan == null){
            return null;
        }

        return Carbon::parse($laporan->created_at)->format('m - Y');
    }

    static function webGetFirst(){
        $laporan = LaporanWeb::orderBy('created_at', 'asc')->first();

        if($laporan == null){
            return null;
        }

        return Carbon::parse($laporan->created_at)->format('m - Y');
    }

    static function webGetLast(){
        $laporan = LaporanWeb::orderBy('created_at', 'desc')->first();

        if($laporan == null){
            return null;
        }

        return Carbon::parse($laporan->created_at)->format('m - Y');
    }

    static function getUser($id){
        $user = User::where('id','=',$id)->first();

        return $user;
    }

    static function getKonfirmasi($laporanUuid, $tipe){
        $konfirmasi = KonfirmasiLaporan::where('laporanUuid','=',$laporanUuid)->where('tipeKonfirmasi','=',$tipe)->get();

        return $konfirmasi;
    }

    static function getKonfirmasiRe($laporanUuid, $tipe, $link){
        $konfirmasi = KonfirmasiLaporan::where('laporanUuid','=',$laporanUuid)->where('tipeKonfirmasi','=',$tipe)->where('linkKonfirmasi','=',$link)->get();

        return $konfirmasi;
    }

    static function getRole($id){
        $role = Roles::where('id','=',$id)->first();

        return $role;
    }

}
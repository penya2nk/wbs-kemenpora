<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Laporan\BaseController;
use rni\LaporanWeb;
use rni\LaporanLain;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;
use Storage;
use rni\Services\GlobalServices;
use rni\Http\Controllers\MailController;
use rni\User;
use rni\KonfirmasiLaporan;
use rni\Http\Controllers\KonfirmasiController;

class KonfirmasiController extends Controller
{
    public function addRe(Request $request, $laporanId, $laporanUuid, $userId, $routeDetail, $konfirmasiId){

        $konfirmasi_valid = 'konfirmasi_re'.$konfirmasiId;

        $this->validate($request, [
                $konfirmasi_valid => "required"
            ]);

        //return $konfirmasiId;

        $request['laporanUuid'] = $laporanUuid;
        $request['userId'] = $userId;
        $request['konfirmasi'] = $request[$konfirmasi_valid];
        $request['linkKonfirmasi'] = $konfirmasiId;

        KonfirmasiLaporan::create($request->all());

        //sent email

        $user_pengirim = User::find($request->userId);
        $user_penerima = User::find($request->userIdPenerima);
        

        // $dataEmail = array('email_penerima'=>$user_penerima->email,'nama_penerima'=>$user_penerima->fullname,'laporanID'=>$laporanId,'title' => config('mail.from.name'));

        // $mc = new MailController;

        // $mc->sendEmail('emails.notif-konfirmasi-from-member',$user_pengirim->email,$user_pengirim->fullname,$user_penerima->email,$user_penerima->fullname,'[WBS] Konfirmasi',$dataEmail);

        return redirect(route($routeDetail,['id'=>base64_encode($laporanId)]));
    }
}

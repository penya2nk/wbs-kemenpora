<?php

namespace rni\Http\Controllers\Admin\Laporan;

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
use rni\Http\Controllers\Admin\Laporan\KonfirmasiController;

class KonfirmasiController extends Controller
{

    public function add(Request $request, $laporanId, $laporanUuid, $userId, $routeDetail){

        $this->validate($request, [
                    'konfirmasi' => 'required'
                ]);

        $request['laporanUuid'] = $laporanUuid;
        $request['userId'] = $userId;

        KonfirmasiLaporan::create($request->all());

        // notifikasi ke email 
        if(!empty($request->email_penerima) || $request->email_penerima != NULL){
           
            $dataEmail = ['email_penerima' => $request->email_penerima,
                          'nama_penerima' => $request->nama_penerima,
                          'konfirmasi' => $request->konfirmasi,
                          'laporanID' => $request->laporanID,
                          'title' => config('mail.from.name')
                          ];

            $mc = new MailController;

            // sent to email users/member
            $mc->sendEmail('emails.notif-konfirmasi',config('mail.from.address'),config('mail.from.name'),$request->email_penerima,$request->nama_penerima,'[WBS] Informasi laporan telah dibuat',$dataEmail);
        }

        return redirect(route($routeDetail,['id'=>$laporanId]));
    }

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

        // return $routeDetail;
        return redirect(route($routeDetail,['id'=>$laporanId]));
    }
}

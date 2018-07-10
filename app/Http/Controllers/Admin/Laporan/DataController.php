<?php

namespace rni\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use rni\Http\Requests;
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

class DataController extends BaseController
{
    //

    public function changeStatus($id, $mode){ 

        $laporan = LaporanWeb::findOrFail($id);
    
        $laporan->statusId = $mode;
        $laporan->save();

        $member = LaporanWeb::find($id)->detail_member;



        switch ($mode) {
            case 4:
                
                $dataEmail = ['no_registrasi' => $laporan->noRegistrasi];
                
                $mc = new MailController;

                $mc->sendEmail('emails.laporan-diproses',Config('mail.from')['address'],Config('mail.from')['name'],$member->email,$member->fullname,'[WBS] Informasi laporan sedang diproses',$dataEmail);

                break;

            case 6:
                
                $dataEmail = ['no_registrasi' => $laporan->noRegistrasi];
                
                $mc = new MailController;

                $mc->sendEmail('emails.laporan-selesai',Config('mail.from')['address'],Config('mail.from')['name'],$member->email,$member->fullname,'[WBS] Informasi laporan telah selesai',$dataEmail);
                break;
        }
        

        return redirect(route('laporan.laporan-detail',compact('id')));

    }

    public function changeStatusAlt($id, $mode){
        

        $laporan = LaporanLain::findOrFail($id);
        $laporan->statusId = $mode;
        $laporan->save();

        return redirect(route('laporan.laporan-detail-alt',compact('id')));

    }

    public function kirim(){

        $laporanWebData = LaporanWeb::where('statusId','<>',2)->where('statusId','=',1)->get();        

        foreach ($laporanWebData as $laporan) {
            
            // Send Email

            $user = User::where('id','=',$laporan->userId)->first();

            $global_service = new GlobalServices;
            $informasi = "Disertakan (Tidak Dirahasiakan)";
            if($laporan->kategoriPengirim==2) $informasi = "Dirahasiakan";

            $dataEmail = array('no_registrasi'=>$laporan->noRegistrasi,'created_at'=>Carbon::parse($laporan->created_at)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($laporan->kategoriLaporan),'deskripsi_singkat'=>$laporan->deskripsiSingkat,'deskripsi'=>$laporan->deskripsi,'informasi'=>$informasi);

            $mc = new MailController;

            $mc->sendEmail('emails.laporan-dikirim','rni.wbs.support@reandabernardi.com','WBS RNI',$user->email,$user->fullname,'[WBS] Informasi laporan telah dikirim',$dataEmail);

            //

        }

        $laporanWeb = LaporanWeb::where('statusId','<>',2)->where('statusId','=',1)->update(['statusId'=>3,'tanggalDikirim'=>Carbon::now()]);

        $laporanLain = LaporanLain::where('statusId','<>',2)->where('statusId','=',1)->update(['statusId'=>3,'tanggalDikirim'=>Carbon::now()]);

        return "OK";

    }

    public function kirimSatuan($id){

        $laporanWebData = LaporanWeb::find($id)->get();

        foreach ($laporanWebData as $laporan) {
            
            // Send Email

            $user = User::where('id','=',$laporan->userId)->first();

            if(isset($user->email)){
                $global_service = new GlobalServices;
                $informasi = "Disertakan (Tidak Dirahasiakan)";
                if($laporan->kategoriPengirim==2) $informasi = "Dirahasiakan";

                $dataEmail = array('no_registrasi'=>$laporan->noRegistrasi,'created_at'=>Carbon::parse($laporan->created_at)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($laporan->kategoriLaporan),'deskripsi_singkat'=>$laporan->deskripsiSingkat,'deskripsi'=>$laporan->deskripsi,'informasi'=>$informasi,'title' => config('mail.from.name'));

                $mc = new MailController;

                $mc->sendEmail('emails.laporan-dikirim',Config('mail.from')['address'],Config('mail.from')['name'],$user->email,$user->fullname,'[WBS] Informasi laporan telah diteruskan',$dataEmail);
            }

        }

        $laporanWeb = LaporanWeb::where('id',$id)->update(['statusId'=>3,'tanggalDikirim'=>Carbon::now()]);

        return redirect(route('laporan.laporan-detail',['id'=>$id]));
    }

    public function getUploadedFile($param1, $param2){
        $file_path = storage_path('app/uploadFiles/'.$param1.'/'.$param2);
        return response()->download($file_path);
    }

    public function spamWeb(Request $request, $id){

        $laporan = LaporanWeb::findOrFail($id);

        $laporan->spam = $request['spam'];

        $laporan->save();

        $user = User::where('id','=',$laporan->userId)->first();

            if(isset($user->email)){
                $global_service = new GlobalServices;
                $informasi = "Disertakan (Tidak Dirahasiakan)";
                if($laporan->kategoriPengirim==2) $informasi = "Dirahasiakan";

                $dataEmail = array('no_registrasi'=>$laporan->noRegistrasi,'created_at'=>Carbon::parse($laporan->created_at)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($laporan->kategoriLaporan),'deskripsi_singkat'=>$laporan->deskripsiSingkat,'deskripsi'=>$laporan->deskripsi,'informasi'=>$informasi,'title' => config('mail.from.name'),'alasan'=>$request['spam']);

                $mc = new MailController;

                $mc->sendEmail('emails.laporan-spam',Config('mail.from')['address'],Config('mail.from')['name'],$user->email,$user->fullname,'[WBS] Informasi laporan terindikasi sebagai spam',$dataEmail);
        }
        
        return redirect(route('laporan.laporan-detail',compact('id')));
    }

    public function spamLain(Request $request, $id){
        $laporan = LaporanLain::findOrFail($id);

        $laporan->spam = $request['spam'];

        $laporan->save();

        return redirect(route('laporan.laporan-detail-alt',compact('id')));
    }

    public function statusWeb(Request $request, $id){
        $laporan = LaporanWeb::findOrFail($id);

        $laporan->noteSpi = $request['note'];

        $laporan->save();

        return redirect(route('laporan.laporan-detail',compact('id')));
    }

    public function statusLain(Request $request, $id){
        $laporan = LaporanLain::findOrFail($id);

        $laporan->noteSpi = $request['note'];

        $laporan->save();

        return redirect(route('laporan.laporan-detail-alt',compact('id')));
    }

    public function spamWebHapus($id){    

        $laporan = LaporanWeb::findOrFail($id);
        $laporan->spam = "";
        $laporan->save();

        return redirect(route('laporan.laporan-detail',compact('id')));

    }

    public function spamLainHapus($id){    

        $laporan = LaporanLain::findOrFail($id);
        $laporan->spam = "";
        $laporan->save();

        return redirect(route('laporan.laporan-detail-alt',compact('id')));

    }
}

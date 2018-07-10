<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use rni\LaporanWeb;
use rni\LaporanLain;
use rni\Services\GlobalServices;
use Carbon\Carbon;
use rni\User;

class MailController extends Controller
{
    //
    static function sendEmail($resource, $from, $from_title, $to, $to_title, $subject, $data_array){

        $data = $data_array;
        Mail::send($resource, $data, function ($message) use ($from, $from_title, $to, $to_title, $subject){
            $message->from($from, $from_title);

            $message->to($to, $to_title)->subject($subject);
        });
    }

    public function kirim(){

        $laporanWebData = LaporanWeb::where('statusId','<>',2)->where('statusId','=',1)->get();
        $laporanLainData = LaporanLain::where('statusId','<>',2)->where('statusId','=',1)->get();  

        // $data = array('test'=>'123');

        // $this->sendEmail('emails.example','rni.wbs.support@reandabernardi.com','WBS RNI','yogadirgantara@rocketmail.com','yoga','[WBS] Informasi laporan telah dikirim',$data);    

        // return "KKKKKKKAAAAAA"; 

        foreach ($laporanWebData as $laporan) {
            
            // Send Email

            $user = User::where('id','=',$laporan->userId)->first();

            $global_service = new GlobalServices;
            $informasi = "Disertakan (Tidak Dirahasiakan)";
            if($laporan->kategoriPengirim==2) $informasi = "Dirahasiakan";

            $dataEmail = array('no_registrasi'=>$laporan->noRegistrasi,'created_at'=>Carbon::parse($laporan->created_at)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($laporan->kategoriLaporan),'deskripsi_singkat'=>$laporan->deskripsiSingkat,'deskripsi'=>$laporan->deskripsi,'informasi'=>$informasi);

            // $mc = new MailController;

            $this->sendEmail('emails.laporan-dikirim','rni.wbs.support@reandabernardi.com','WBS RNI',$user->email,$user->fullname,'[WBS] Informasi laporan telah dikirim',$dataEmail);            

            //

        }

        $this->kirim2($laporanWebData, $laporanLainData);

        $laporanWeb = LaporanWeb::where('statusId','<>',2)->where('statusId','=',1)->update(['statusId'=>3,'tanggalDikirim'=>Carbon::now()]);

        $laporanLain = LaporanLain::where('statusId','<>',2)->where('statusId','=',1)->update(['statusId'=>3,'tanggalDikirim'=>Carbon::now()]);

        return "OK OK";

    }

    public function kirim2($param1, $param2){

        // $laporanWebData = LaporanWeb::where('statusId','<>',2)->where('statusId','=',1)->get();
        // $laporanLainData = LaporanLain::where('statusId','<>',2)->where('statusId','=',1)->get(); 

        $laporanWebData = $param1;
        $laporanLainData = $param2;
        $countLaporanWeb = $laporanWebData->count();
        $countLaporanLain = $laporanLainData->count();
        $total = $countLaporanWeb + $countLaporanLain;
        $dataEmail = array('laporanWeb' => $laporanWebData, 'laporanLain' => $laporanLainData, 'countLaporanWeb' => $countLaporanWeb, 'countLaporanLain' => $countLaporanLain, 'total' => $total);

        // return view('emails.laporan-harian', ['laporanWeb' => $laporanWebData, 'laporanLain' => $laporanLainData, 'countLaporanWeb' => $countLaporanWeb, 'countLaporanLain' => $countLaporanLain, 'total' => $total]);

        // $this->sendEmail('emails.laporan-harian','rni.wbs.support@reandabernardi.com','WBS RNI','dirgantaradwiyoga@gmail.com','Lapor RNI','[WBS] Informasi laporan-laporan telah terkirim',$dataEmail);

        $this->sendEmail('emails.laporan-harian','rni.wbs.support@reandabernardi.com','WBS RNI','spi.rni@reandabernardi.com','Lapor RNI','[WBS] Informasi laporan-laporan telah terkirim',$dataEmail);

        $this->sendEmail('emails.laporan-harian','rni.wbs.support@reandabernardi.com','WBS RNI','gunadi.yusuf@gmail.com','Gunadi Yusuf','[WBS] Informasi laporan-laporan telah terkirim',$dataEmail);

        $this->sendEmail('emails.laporan-harian','rni.wbs.support@reandabernardi.com','WBS RNI','gunadi_yusuf@yahoo.com','Gunadi Yusuf','[WBS] Informasi laporan-laporan telah terkirim',$dataEmail);

        $this->sendEmail('emails.laporan-harian','rni.wbs.support@reandabernardi.com','WBS RNI','lapor.rni@reandabernardi.com','Gunadi Yusuf','[WBS] Informasi laporan-laporan telah terkirim',$dataEmail);

        // $this->sendEmail('emails.example','rni.wbs.support@reandabernardi.com','WBS RNI','yogadirgantara@rocketmail.com','yoga','[WBS] Informasi laporan telah dikirim',$dataEmail);

    }
    
}

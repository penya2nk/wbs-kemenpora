<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Requests\LaporanLainRequest;
use rni\Http\Requests\Admin\InputLaporanRequest;
use rni\LaporanLain;
use rni\LaporanWeb;
use rni\BuktiLaporanWeb;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;
use rni\Http\Controllers\MailController;
use Illuminate\Support\Facades\Auth;
use rni\Services\GlobalServices;
use Illuminate\Support\Facades\Lang;
use rni\User;
use Hash;

class LaporanLainController extends Controller
{

    public function createMember(Request $request){

        $this->validate($request, [
                'deskripsiSingkat' => 'required',
                'kategoriLaporan' => 'required',
                'deskripsi' => 'required',
                'g-recaptcha-response' => 'required',
            ]);

        //Uuid
        $request['uuid'] = Uuid::generate();

        //No Registrasi
        $carbon_now = Carbon::now();
        $no_reg = Carbon::parse($carbon_now)->format('dmyHis');
        $request['noRegistrasi'] = $no_reg;

        //Input Data
        $store = LaporanWeb::create($request->all());

        //Store Bukti
        $jmlFile = count($request->file('files'));
        
        for ($i=0; $i < $jmlFile ; $i++) { 
            $storeBuktiLaporanWeb = new BuktiLaporanWeb;

            $storeBuktiLaporanWeb->laporanWebID = $store->id;
            $storeBuktiLaporanWeb->file_name = Carbon::now('Asia/Jakarta')->format('dmYhis').'_'.str_replace(' ', '_', $request->file('files')[$i]->getClientOriginalName());
            $storeBuktiLaporanWeb->file_size = $request->file('files')[$i]->getClientSize();
            $storeBuktiLaporanWeb->mime_type = $request->file('files')[$i]->getClientMimeType();
            $storeBuktiLaporanWeb->file_extension = $request->file('files')[$i]->getExtension();
            $storeBuktiLaporanWeb->save();
            
            $destinationPath = 'bukti/';
            $fileName = Carbon::now('Asia/Jakarta')->format('dmYhis').'_'.str_replace(' ', '_', $request->file('files')[$i]->getClientOriginalName());
            $request->file('files')[$i]->move($destinationPath, $fileName);
        }

        // check user
        $u = User::find(Auth::user()->id);

        //Send Email
        if(!empty($u->email) || $u->email != NULL){
            
            $global_service = new GlobalServices;

            $informasi = "Disertakan (Tidak Dirahasiakan)";

            if($request['kategoriPengirim']==2) $informasi = "Dirahasiakan";

            $dataEmail = array('no_registrasi'=>$request['noRegistrasi'],'created_at'=>Carbon::parse($carbon_now)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($request['kategoriLaporan']),'deskripsi_singkat'=>$request['deskripsiSingkat'],'deskripsi'=>$request['deskripsi'],'informasi'=>$informasi,'title'=>config('mail.from.name'));

            $mc = new MailController;

            // sent to email users/member
            $mc->sendEmail('emails.laporan-dibuat',config('mail.from.address'),config('mail.from.name'),$u->email,$u->fullname,'[WBS] Informasi laporan telah dibuat',$dataEmail);

            // forward to email support
            $mc->sendEmail('emails.laporan-forward',config('mail.from.address'),config('mail.from.name'),config('mail.from.address'),'Operator','[WBS] Informasi laporan masuk',$dataEmail);
        }

        return redirect('/buat-pelaporan-wl/terkirim');
    }

    public function addAvidenceMember(Request $request){

        // if($request->has('files')){
            
            //Store Bukti
            $jmlFile = count($request->file('files'));
            
            for ($i=0; $i < $jmlFile ; $i++) { 
                $storeBuktiLaporanWeb = new BuktiLaporanWeb;

                $storeBuktiLaporanWeb->laporanWebID = $request->id;
                $storeBuktiLaporanWeb->file_name = Carbon::now('Asia/Jakarta')->format('dmYhis').'_'.str_replace(' ', '_', $request->file('files')[$i]->getClientOriginalName());
                $storeBuktiLaporanWeb->file_size = $request->file('files')[$i]->getClientSize();
                $storeBuktiLaporanWeb->mime_type = $request->file('files')[$i]->getClientMimeType();
                $storeBuktiLaporanWeb->file_extension = $request->file('files')[$i]->getExtension();
                $storeBuktiLaporanWeb->save();
                
                $destinationPath = 'bukti/';
                $fileName = Carbon::now('Asia/Jakarta')->format('dmYhis').'_'.str_replace(' ', '_', $request->file('files')[$i]->getClientOriginalName());
                $request->file('files')[$i]->move($destinationPath, $fileName);
            }
        // }   

        return redirect(base64_encode($request->id).'/detail-laporan');
    }

    public function terkirim(){
        return view('public-pages.sukses-kirim-laporan-member');
    }


    public function create(Request $request){

        if($request['modeMember'] == 2){ //member

             $this->validate($request, [
                'deskripsiSingkat' => 'required',
                'kategoriLaporan' => 'required',
                'deskripsi' => 'required',
                'g-recaptcha-response' => 'required',
                'email2' => 'required|email',
                'password2' => 'required',
            ]);

        }else{

            $this->validate($request, [
                'deskripsiSingkat' => 'required',
                'kategoriLaporan' => 'required',
                'deskripsi' => 'required',
                'g-recaptcha-response' => 'required',
                'fullname' => 'required',
                'handphoneNumber' => 'required|numeric',
            ]);

        }


        //Uuid
        $request['uuid'] = Uuid::generate();
        //

        //No Registrasi
        $carbon_now = Carbon::now();
        $no_reg = Carbon::parse($carbon_now)->format('dmyHis');
        $request['noRegistrasi'] = $no_reg;


        if($request['modeMember'] == 2){ //member

            //Cek login

            $u = User::where('email',$request['email2'])->first();

            $request['userId'] = $u->id;

            if(Hash::check($request['password2'],$u->password)){
                
                //Input Data

                LaporanWeb::create($request->all());

                //Send Email

                $global_service = new GlobalServices;

                $informasi = "Disertakan (Tidak Dirahasiakan)";
                if($request['kategoriPengirim']==2) $informasi = "Dirahasiakan";

                $dataEmail = array('no_registrasi'=>$request['noRegistrasi'],'created_at'=>Carbon::parse($carbon_now)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($request['kategoriLaporan']),'deskripsi_singkat'=>$request['deskripsiSingkat'],'deskripsi'=>$request['deskripsi'],'informasi'=>$informasi);

                

                $mc = new MailController;

                $mc->sendEmail('emails.laporan-dibuat','rni.wbs.support@reandabernardi.com','WBS RNI',$u->email,$u->fullname,'[WBS] Informasi laporan telah dibuat',$dataEmail);

                $mc->sendEmail('emails.laporan-forward','rni.wbs.support@reandabernardi.com','WBS RNI','operator.rni@reandabernardi.com','Reanda Bernardi','[WBS] Informasi laporan masuk',$dataEmail);

            }else{
                return redirect()->back()->withInput()->withErrors(['email2' => Lang::get('auth.failed')]);
            }

        }else{

            $this->validate($request, [
                'fullname' => 'required',
            ]);

            //Input Data

            LaporanLain::create($request->all());

            //Send Email

            if($request['email']!=""){

                $global_service = new GlobalServices;

                $informasi = "Disertakan (Tidak Dirahasiakan)";
                if($request['kategoriPengirim']==2) $informasi = "Dirahasiakan";

                $dataEmail = array('no_registrasi'=>$request['noRegistrasi'],'created_at'=>Carbon::parse($carbon_now)->format('l, d F Y H:i:s'),'kategori_text'=>$global_service->getKategori($request['kategoriLaporan']),'deskripsi_singkat'=>$request['deskripsiSingkat'],'deskripsi'=>$request['deskripsi'],'informasi'=>$informasi);

                

                $mc = new MailController;

                $mc->sendEmail('emails.laporan-dibuat','rni.wbs.support@reandabernardi.com','WBS RNI',$request['email'],$request['fullname'],'[WBS] Informasi laporan telah dibuat',$dataEmail);

                 $mc->sendEmail('emails.laporan-forward','rni.wbs.support@reandabernardi.com','WBS RNI','operator.rni@reandabernardi.com','Reanda Bernardi','[WBS] Informasi laporan masuk',$dataEmail);

            }                       

            // return $dataEmail;

        }

        return view('partials.pelaporan.sukses');
    }

}

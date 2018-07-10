<?php

namespace rni\Http\Controllers\Admin\Operator;

use Illuminate\Http\Request;

use rni\Http\Requests;
use Response;
use rni\Http\Requests\Admin\InputLaporanRequest;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Operator\BaseController;
use rni\LaporanLain;
use Carbon\Carbon;
use Storage;
use Illuminate\Http\File;
use Webpatser\Uuid\Uuid;

class InputLaporanController extends BaseController
{
    //
    public function update($id, Request $request){

        if($request->jalurId == ""){

            $this->validate($request, [
                'deskripsiSingkat' => 'required',
                'deskripsi' => 'required',
                'kategoriLaporan' => 'required',
                'kategoriPengirim' => 'required',                
                'jalurId' => 'required', 
            ]);

        }else{

            if($request->jalurId == 2){

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'required|numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',               
                ]);

            }elseif ($request->jalurId == 3) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'required|numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',             
                ]);
                
            }elseif ($request->jalurId == 4) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'required|numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',             
                ]);
                
            }elseif ($request->jalurId == 5) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'required|email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',                  
                ]);
                
            }elseif ($request->jalurId == 6) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',                  
                ]);
                
            }else{

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',                  
                ]);

            }

        }

        $laporan = LaporanLain::findorFail($id);

        if($laporan->uploadFile == null){
            $files = $request['file'];
            $dest_db = substr(str_random(Carbon::now()->toDateTimeString()),0,60);
            $dest = 'uploadFiles/'.$dest_db;

            if(empty($files)){
                // Do Nothing
            }else{
      
                 foreach ($files as $index => $file) {

                    Storage::putFileAs($dest,new File($file->getRealPath()),$file->getClientOriginalName());

                 }
                 
                $request['uploadFile'] = $dest_db;
            }

           
        }else{
            $files = $request['file'];
            $dest = 'uploadFiles/'.$laporan->uploadFile; 

            if(empty($files)){
                // Do Nothing
            }else{
      
                 foreach ($files as $index => $file) {

                    Storage::putFileAs($dest,new File($file->getRealPath()),$file->getClientOriginalName());

                 }
                                
            }
        }

        $laporan->update($request->all());

        return redirect(route('laporan.laporan-detail-alt',['id'=>$id]));
    }

    // public function update($id, Request $request){
    //     $files = $request['uploadFile'];

    //     // return $files;
    //     //return $files->getClientOriginalName();

    //     $str = "";

    //     if(empty($files)){
    //         // Do Nothing
    //     }else{
            
    //          //return $files;        
    //         // return $request['image'];
    //          foreach ($files as $index => $file) {
    //             // return "Filename : "+ $file->getClientOriginalName() +" <br>";
    //             // return $file->getClientOriginalName() . " <br> " . $file->getSize() . "<br>";
    //             $nextStr = $file->getClientOriginalName()."?::?".str_limit(str_random(Carbon::now()->toDateTimeString()),60); 
    //             //$file->move(public_path("/uploads"),$file->getClientOriginalName());
    //             //Storage::put($file->getClientOriginalName(), file_get_contents($file));
    //             $str .= $file->getClientOriginalName() . " <br> " . $file->getSize()."<br>".$file->getRealPath() . "<br>". $nextStr."<br>";
    //          }

    //          return $str;

    //     }

    //     return "ok";
    // }

    // public function create(Request $request){



    //     $files = $request['uploadFile'];

    //     // return $files;
    //     //return $files->getClientOriginalName();

    //     $str = "";

    //     if(empty($files)){
    //         // Do Nothing
    //     }else{
    //         $dest = 'uploadFiles/'.str_limit(str_random(Carbon::now()->toDateTimeString()),60); 
    //          //return $files;        
    //         // return $request['image'];
    //          foreach ($files as $index => $file) {
    //             // return "Filename : "+ $file->getClientOriginalName() +" <br>";
    //             // return $file->getClientOriginalName() . " <br> " . $file->getSize() . "<br>";
                
    //             //$file->move(public_path("/uploads"),$file->getClientOriginalName());
    //             //Storage::put($file->getClientOriginalName(), file_get_contents($file));
    //             Storage::putFileAs($dest,new File($file->getRealPath()),$file->getClientOriginalName());
    //             $str .= $file->getClientOriginalName() . " <br> " . $file->getSize()."<br>".$file->getRealPath()  . "<br>". $dest."<br>";
    //          }

    //          return $str;

    //     }

    //     return "ok";

    // }


    public function create(Request $request){

        if($request->jalurId == ""){

            $this->validate($request, [
                'deskripsiSingkat' => 'required',
                'deskripsi' => 'required',
                'kategoriLaporan' => 'required',
                'kategoriPengirim' => 'required',                
                'jalurId' => 'required', 
            ]);

        }else{

            if($request->jalurId == 2){

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'required|numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',               
                ]);

            }elseif ($request->jalurId == 3) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'required|numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',             
                ]);
                
            }elseif ($request->jalurId == 4) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'required|numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',             
                ]);
                
            }elseif ($request->jalurId == 5) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'required|email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',                  
                ]);
                
            }elseif ($request->jalurId == 6) {

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',                  
                ]);
                
            }else{

                $this->validate($request, [
                    'deskripsiSingkat' => 'required',
                    'deskripsi' => 'required',
                    'kategoriLaporan' => 'required',
                    'kategoriPengirim' => 'required',                
                    'jalurId' => 'required', 
                    'email' => 'email',
                    'phoneNumber' => 'numeric',
                    'handphoneNumber' => 'numeric',
                    'identityNumber' => 'numeric',
                    'fullname' => 'required',                  
                ]);

            }

        }

        $files = $request['file'];
        $dest_db = substr(str_random(Carbon::now()->toDateTimeString()),0,60);
        $dest = 'uploadFiles/'.$dest_db;

        if(empty($files)){
            // Do Nothing
        }else{
  
             foreach ($files as $index => $file) {

                Storage::putFileAs($dest,new File($file->getRealPath()),$file->getClientOriginalName());

             }

             $request['uploadFile'] = $dest_db;
             
        }

        $no_reg = Carbon::parse(Carbon::now())->format('dmyHis');
        $request['noRegistrasi'] = $no_reg;

        //Uuid
        $request['uuid'] = Uuid::generate();
        
        LaporanLain::create($request->all());

        return redirect(route('laporan.laporan-non-website'));

    }

    public function fileDelete($param1,$param2,$param3){

        $path = 'uploadFiles/'.$param1.'/'.$param2;

        Storage::delete($path);

        return redirect(route('operator.edit-laporan',['id'=>$param3]));

    }


}

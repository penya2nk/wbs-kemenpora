<?php
namespace rni\Services;

use rni\KategoriLaporan;
use rni\MasterStatus;
use rni\MasterJalur;
use rni\LaporanWeb;
use rni\User;
use rni\Roles;

class LaporanServices
{
	static function cekLaporanWebMember(){
        
        if(LaporanWeb::all()->count()<1){
            return false;
        }else{
            return true;
        }

    }
}
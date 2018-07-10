<?php
namespace rni\Services;

use rni\KategoriLaporan;
use rni\MasterStatus;
use rni\MasterJalur;
use rni\LaporanWeb;
use rni\User;
use rni\Roles;

class RoleServices
{
	static function getRoleName($id){
        $r = Roles::where('id',$id)->first();

        return $r->role;
    }
}
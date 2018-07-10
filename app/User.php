<?php

namespace rni;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'fullname', 'address','phoneNumber','handphoneNumber','identityNumber','roleId'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

        return $this->belongsTo('rni\Roles','roleId');

    }

    public function konfirmasi_laporan(){

        return $this->hasMany('KonfirmasiLaporan','userId');

    }

    // public function konfirmasi_laporan_lain(){

    //     return $this->hasMany('KonfirmasiLaporanLain','userId');

    // }

//    public function userData(){
//        return $this->hasOne('rni\UserData');
//    }
}

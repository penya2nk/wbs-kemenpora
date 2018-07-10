<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class MasterStatus extends Model
{
    //
    protected $table = "master_status_laporan";

    protected $fillable = [
        "status"
    ];

    public function laporan_web(){

        return $this->hasMany('LaporanWeb','statusId');

    }

    public function laporan_lain(){

        return $this->hasMany('LaporanLain','statusId');

    }
}

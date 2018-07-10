<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class MasterJalur extends Model
{
    //
    protected $table = "master_jalur_laporan";

    protected $fillable = [
      "jalur"
    ];

    public function laporan_lain(){

        return $this->hasMany('LaporanLain','jalurId');

    }
}

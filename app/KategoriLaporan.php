<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class KategoriLaporan extends Model
{
    protected $table = "kategori_laporan";

    protected $fillable = [
        "kategori","deskripsi"
    ];

    public $timestamps = true;

    public function laporan_web(){

        return $this->hasMany('LaporanWeb','kategoriLaporan');

    }

    public function laporan_lain(){

        return $this->hasMany('LaporanLain','kategoriLaporan');

    }
}

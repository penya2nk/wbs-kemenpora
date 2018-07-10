<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class LaporanWeb extends Model
{
    //
    protected $table = "laporan_web";

    protected $fillable = [
        "spam", "noteSpi", "uuid", "userId", "kategoriLaporan", "statusId", "deskripsiSingkat", "deskripsi", "kategoriPengirim",
        "question1", "question2", "question3", "question4", "question5", "question6", "question7", "question8", "question9", "question10", "question11", "question12", "tanggalDikirim" , "noRegistrasi"
    ];

    public function kategori_laporan(){

        return $this->belongsTo('rni\KategoriLaporan','kategoriLaporan');

    }

    public function status_laporan(){

        return $this->belongsTo('rni\MasterStatus','statusId');

    }

    public function detail_member(){
        return $this->belongsTo('rni\User','userId');
    }

    // public function konfirmasi_laporan_web(){

    //     return $this->hasMany('KonfirmasiLaporanWeb','laporanId');

    // }
}

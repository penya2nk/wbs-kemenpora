<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class LaporanLain extends Model
{
    //
    protected $table = "laporan_lain";

    protected $fillable = [
        "spam", "noteSpi", "uuid", "kategoriLaporan", "jalurId", "statusId", "deskripsiSingkat", "deskripsi", "kategoriPengirim",
        "email", "fullname", "address","phoneNumber","handphoneNumber","identityNumber",
        "question1", "question2", "question3", "question4", "question5", "question6", "question7", "question8", "question9", "question10", "question11", "question12", "tanggalDikirim", "uploadFile", "noRegistrasi"
    ];

    public function kategori_laporan(){

        return $this->belongsTo('rni\KategoriLaporan','kategoriLaporan');

    }

    public function status_laporan(){

        return $this->belongsTo('rni\MasterStatus','statusId');

    }

    public function jalur_laporan(){

        return $this->belongsTo('rni\MasterJalur','jalurId');

    }

    // public function konfirmasi_laporan_lain(){

    //     return $this->hasMany('KonfirmasiLaporanLain','laporanId');

    // }
}

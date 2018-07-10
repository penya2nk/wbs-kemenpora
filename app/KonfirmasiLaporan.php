<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class KonfirmasiLaporan extends Model
{
    //
    protected $table = "konfirmasi_laporan";

    protected $fillable = [
    	"laporanUuid", "userId", "tipeKonfirmasi", "konfirmasi", "linkKonfirmasi"
    ];

    public function user(){

        return $this->belongsTo('User','userId');

    }
}

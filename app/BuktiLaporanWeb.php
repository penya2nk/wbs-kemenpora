<?php

namespace rni;

use Illuminate\Database\Eloquent\Model;

class BuktiLaporanWeb extends Model
{
    //
    protected $table = "bukti_laporan_web";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'laporanWebID','file_name','file_size','mime_type','file_extension'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The primary key table.
     *
     * @var string
     */
    protected $primarykey = 'id';
    
}

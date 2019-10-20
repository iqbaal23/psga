<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //
    public $timestamps = false;
    protected $table = 'kegiatan';
    protected $fillable = ['id', 'id_jenis_kegiatan','nama_kegiatan', 'keterangan', 'foto', 'tanggal'
        , 'nama_pembuat', 'nama_juara'];
}

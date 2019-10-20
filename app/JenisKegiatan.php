<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    //
    protected $table = 'jenis_kegiatan';
    protected $fillable = ['id', 'nama_kegiatan', 'kategori'];
}

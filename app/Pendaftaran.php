<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    //
    protected $table = 'pendaftaran';
    protected $fillable = ['id_kegiatan', 'nisn', 'nama', 'asal_sekolah', 'jenis_kelamin'
        , 'umur', 'alamat', 'no_hp', 'email_guru','judul_cerita','pengantar'
    ];
}

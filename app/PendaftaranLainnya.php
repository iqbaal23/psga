<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    //
    protected $table = 'pendaftaran_seminar';
    protected $fillable = ['id_kegiatan', 'nama', 'email', 'status', 'no_hp', 
    ];
}

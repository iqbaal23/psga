<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    //
    public $timestamps = false;
    protected $table = 'komentar';
    protected $fillable = ['id', 'artikel_id', 'isi', 'tanggal'];
}

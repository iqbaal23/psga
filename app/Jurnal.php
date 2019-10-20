<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    //
    protected $table = 'jurnal';
    protected $fillable =
        [
            'judul', 'author', 'file', 'tanggal'
        ];
}

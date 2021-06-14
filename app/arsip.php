<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arsip extends Model
{
    protected $table = 'arsip';
    protected $fillable = ['nama','jenis','ns','keperluan','alamat','tanggal','nohp'];
}

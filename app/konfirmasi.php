<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konfirmasi extends Model
{
    protected $table = 'konfirmasi';
    protected $fillable = ['namac','namap','keterangan','komentar','status'];
}

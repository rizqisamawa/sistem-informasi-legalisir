<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ktp extends Model
{
    protected $table = 'ktp';
    protected $fillable = ['id_ak','alamat','berlaku'];
}

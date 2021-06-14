<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akta extends Model
{
    protected $table = 'akta';
    protected $fillable = ['id_ak','no_akta','anak_ke'];
}

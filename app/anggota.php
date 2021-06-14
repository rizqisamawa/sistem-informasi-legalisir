<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_ak';
    protected $fillable = ['NIK','nama','kelamin','ttl','agama','pendidikan','pekerjaan','goldarah','stskawin','tglkawin','stskeluarga','warga','ayah','ibu'];

    public function kk()
    {
        return $this->belongsTo(kk::class);
    }
}

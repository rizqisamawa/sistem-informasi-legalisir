<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kk extends Model
{
    protected $table = 'kk';
    protected $primaryKey = 'id';
    protected $fillable = ['no_kk','nama_kk','alamat','rtrw','kodepos','desa','kecamatan','kota','provinsi'];

    public function anggota()
    {
        return $this->hasMany(anggota::class);
    }
}

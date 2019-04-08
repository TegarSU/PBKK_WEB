<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $table = 'dosens';
    protected $fillable = ['nip','nama_dsn','alamat_dsn'];

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswas');
    }
}

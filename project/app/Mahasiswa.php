<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table = 'mahasiswas';
    protected $fillable = ['nrp','nama_mhs','alamat_mhs','dosens_id'];

    public function dosen()
    {
        return $this->belongsTo('App\Dosen','dosens_id');
    }
}

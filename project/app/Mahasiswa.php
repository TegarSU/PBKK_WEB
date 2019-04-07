<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table = 'mahasiswas';
    protected $fillable = ['nrp','nama','alamat','dosens_id'];

    public function dosen()
    {
        return $this->belongsTo('App\Dosen','dosens_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    //
    protected $fillable = [
        'kode','nama_matkul','sks'
    ];
}

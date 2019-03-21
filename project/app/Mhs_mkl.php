<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mhs_mkl extends Model
{
    //
    protected $table = 'mhs_mkls';
    protected $fillable = ['mahasiswa_id','mata_kuliah_id'];

    
}

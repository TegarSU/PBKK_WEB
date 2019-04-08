<?php

use Illuminate\Database\Seeder;

class mklDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 1; $i <= 10; $i++) 
        {
			 DB::table('mata_kuliahs')->insert([                
			'kode' => 'mkl00'.$i,                
			'nama_matkul' => 'Matkul'.$i,
            'sks' => 3,               
			//'alamat' => 'ITS',            
		]);       
	     }
	}
}

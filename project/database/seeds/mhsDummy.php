<?php

use Illuminate\Database\Seeder;

class mhsDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 1; $i <= 10; $i++) 
        {
			DB::table('mahasiswas')->insert([                
			'nrp' => 'mhs00'.$i,                
			'nama_mhs' => 'nama ke-'.$i,                
			'alamat_mhs' => 'ITS',
            'dosens_id' => 1]);       
	     }
	}

}

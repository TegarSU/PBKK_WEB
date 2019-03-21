<?php

use Illuminate\Database\Seeder;

class dsnDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 1; $i <= 10; $i++) 
        {
			 DB::table('dosens')->insert([                
			'nip' => 'dsn00'.$i,                
			'nama' => 'nama ke-'.$i,                
			'alamat' => 'ITS', ]);       
	     }
	}
}

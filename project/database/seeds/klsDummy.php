<?php

use Illuminate\Database\Seeder;

class klsDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 10; $i++) 
        {
			DB::table('kelas')->insert([                
			'dosens_id' => $i,                
			'mata_kuliahs_id' => $i,                
			'kelas' => 105,]);       
	     }
    }
}

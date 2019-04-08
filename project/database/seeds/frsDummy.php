<?php

use Illuminate\Database\Seeder;

class frsDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 10; $i++) {

            DB::table('frs')->insert([                
    			'id_krs' => 'frs00'.$i,                
    			'mahasiswas_id' => $i,   
    			'kelas_id' => 2,             
    			'nilai' => 'A', ]);
        }
    }
}

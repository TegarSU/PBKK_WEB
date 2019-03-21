<?php

use Illuminate\Database\Seeder;

class mhsmklDummy extends Seeder
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
            DB::table('mhs_mkls')->insert([                
            'mahasiswa_id' => $i,                
            'mata_kuliah_id' => $i,                
            ]);
        }
        
    }
}


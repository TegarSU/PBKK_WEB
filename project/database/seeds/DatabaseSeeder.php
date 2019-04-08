<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
     	$this->call(mhsDummy::class);   
     	$this->call(dsnDummy::class); 
     	$this->call(mklDummy::class);  
          $this->call(frsDummy::class);  
          $this->call(klsDummy::class);
     }

}

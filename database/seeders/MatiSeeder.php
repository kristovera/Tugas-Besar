<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class MatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
        DB::table('kematian')->insert([
        	'namaLengkap' => $faker->name,
        	'usia' =>  $faker->numberBetween(30,60),
        	'alamat_kematian' => $faker->address,
        	'wafat' => $faker->date('Y-m-d H:i:s')
        ]);
    
}
}
}

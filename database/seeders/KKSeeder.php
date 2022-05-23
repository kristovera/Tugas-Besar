<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 5; $i++){
    	
        DB::table('kk')->insert([
        	'no_kk' => $faker->numberBetween(100,900),
        	'kepala_kk' => $faker->name,
            'alamat_kk' => $faker->address,
            'nama_kk'   => $faker->name,
            'tempat_kk' => $faker->city,
            'tanggal_kk'=> $faker->date('Y-m-d'),
            'jk_kk'     =>  $faker->randomElement(['LK','W']),
            'hub_kk'    =>   $faker->randomElement(['Istri','Anak','Adik','Orang Tua']),
            'kerja_kk'  => $faker->jobTitle

        ]);
    }
}
}

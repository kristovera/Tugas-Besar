<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class SidiSeeder extends Seeder
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
    	
        DB::table('sidi')->insert([
        	'form' => $faker->numberBetween(100,900),
            'hari' =>$faker->dayOfWeek($max = 'now'),
        	'tgl' => $faker->date('Y-m-d H:i:s'),
            'waktu'  => $faker->time($format = 'H:i:s', $max = 'now'),
        	'nama_sidi' => $faker->name,
            'lahir_sidi' => $faker->city,
            'tempatbap'  => $faker->randomElement(['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
            'tgl_sidi' =>  $faker->dateTimeThisCentury()->format('Y-m-d'),
            'tglbap' =>  $faker->date('Y-m-d H:i:s'),
            'alamat_sidi' => $faker->address

        ]);
    }
}
}

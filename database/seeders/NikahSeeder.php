<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class NikahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 15; $i++){
    
        DB::table('nikah')->insert([
            'no_form' => $faker->numberBetween(100,900),
        	'hari' => $faker->dayOfWeek($max = 'now'),
            'tanggal1'  => $faker->date('Y-m-d'),
        	'waktu' => $faker->time($format = 'H:i:s', $max = 'now'),
            'tempat' => $faker->city,
            'pendeta'  => $faker->firstNameMale,
        	'namaLK' => $faker->name,
        	'alamatLK' => $faker->address,
            'asalgerejaLK'  => $faker->randomElement(['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
        	'nohpLK' => $faker->phoneNumber,
            'namaP' => $faker->name,
            'alamatP' => $faker->address,
            'asalgerejaP'  => $faker->randomElement(['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
        	'nohpP' => $faker->phoneNumber,

        ]);
    }
}
}

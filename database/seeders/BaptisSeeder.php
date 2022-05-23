<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class BaptisSeeder extends Seeder
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
    	// insert data ke table pegawai
        DB::table('baptis')->insert([
        	'form_bap' => $faker->numberBetween(100,900),
        	'hari' => $faker->dayOfWeek($max = 'now'),
        	'tanggal' => $faker->date('Y-m-d H:i:s'),
        	'namalengkap' => $faker->name,
            'tempat' => $faker->city,
            'tgllahir_bap' =>  $faker->dateTimeThisCentury()->format('Y-m-d'),
            'bapak_bap' => $faker->firstNameMale,
            'ibu_bap' =>  $faker->firstNameFemale,
            'alamat_bap' => $faker->address

        ]);
    }
}
}

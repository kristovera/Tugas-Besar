<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class JemaatSeeder extends Seeder
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
    	// insert data ke table pegawai
        DB::table('jemaat')->insert([
        	'daftar'             =>$faker->date('Y-m-d H:i:s'),
            'id'                 =>  $faker->numberBetween(100,900),
            'namalengkap_jem'    => $faker->name,
            'jk_jem'             => $faker->randomElement(['LK','W']),
            'tempat'             => $faker->city,
            'tanggal_jem'        => $faker->dateTimeThisCentury()->format('Y-m-d'),
            'status_jem'         => $faker->randomElement(['menikah','belum menikah','cerai']),
            'alamat_jem'         => $faker->address,
            'nohp_jem'           => $faker->phoneNumber,
            'bapak'              => $faker->firstNameMale,
            'ibu'                => $faker->firstNameFemale,
            'baptis'             => $faker->randomElement(['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
            'tglbap_jem'         => $faker->date('Y-m-d H:i:s'),
            'sidi'               => $faker->randomElement (['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
            'tglsidi_jem'        => $faker->date('Y-m-d H:i:s'),
             'menikah'           => $faker->randomElement (['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
             'tglnikah'          => $faker->date('Y-m-d H:i:s'),
             'statusgereja'      => $faker->randomElement(['Simpatisan','Jemaat']),
             'kerja'             => $faker->jobTitle

        ]);
    }
}
}

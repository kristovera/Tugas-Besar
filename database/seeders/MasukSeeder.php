<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class MasukSeeder extends Seeder
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
    
        DB::table('masuk')->insert([
         'id_masuk'         => $faker->numberBetween(100,900),
         'tgl_masuk'        => $faker->date('Y-m-d H:i:s'),
         'namaKK'           => $faker->firstNameMale,
         'namalengkap'      => $faker->name,
         'gerejasal'         => $faker->randomElement(['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
         'alamat_masuk'      => $faker->address,
         'nohp_masuk'        => $faker->phoneNumber,
         'tempatlahir'       =>  $faker->city,
         'tgllahir'           => $faker->date('Y-m-d H:i:s'),
          'baptis_masuk'      =>  $faker->city,
          'tglbap_masuk'      => $faker->date('Y-m-d H:i:s'),
          'sidi_masuk'         =>  $faker->city,
          'tglsidi_masuk'      => $faker->date('Y-m-d H:i:s'),
          'nikah_masuk'        =>  $faker->city,
           'tglnikah_masuk'     => $faker->date('Y-m-d H:i:s'),
           'pekerjaan'         => $faker->jobTitle

        ]);
    }
}
}

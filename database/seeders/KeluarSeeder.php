<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class KeluarSeeder extends Seeder
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
    
        DB::table('keluar')->insert([
         'id_keluar'            => $faker->numberBetween(100,900),
         'tgl_keluar'           => $faker->date('Y-m-d H:i:s'),
         'namalengkap_keluar'   => $faker->name,
         'alasan'               => $faker->randomElement(['Pernikahan','Pindah Rumah','Tidak Cocok','Kecewa']),
         'nohp_keluar'          => $faker->phoneNumber,
         'tempat_keluar'        => $faker->city,
         'lahir_keluar'         => $faker->date('Y-m-d H:i:s'),
         'gereja_keluar'        => $faker->randomElement(['GBI','GKPS','HKBP','GPDI','GKJ','GKI']),
          'alamat'              => $faker->address,
          'notelp_keluar'       => $faker->e164PhoneNumber,
           'pekerjaan'          => $faker->jobTitle

        ]);
    }
}
}

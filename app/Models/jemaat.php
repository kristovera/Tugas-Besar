<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jemaat extends Model
{
    protected $table = 'jemaat';
    protected $fillable = ['daftar','id','kode_jem','namalengkap_jem','tempat','tanggal_jem',
    'status_jem','alamat_jem','kelurahan_jem','kecamatan_jem','kota_jem',
     'provinsi_jem','nohp_jem','statusgereja','pendidikan','kerja'];

   


   

    /**
     * Method One To Many 
     */
    public function Baptis()
    {
    	return $this->hasMany(Baptis::class);
    }
    public function sidi()
    {
    	return $this->hasMany(sidi::class);
    }
    public function nikah()
    {
    	return $this->hasMany(nikah::class);
    }
    public function kematian()
    {
    	return $this->hasMany(kematian::class);
    }
 
    public function keluar()
    {
    	return $this->hasMany(keluar::class);
    }
    public function anggota()
    {
    	return $this->hasMany(anggota::class);
    }
    public function kk()
    {
    	return $this->hasMany(kk::class);
    }
 
}


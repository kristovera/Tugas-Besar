<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nikah extends Model
{
    protected $table='nikah';
    protected $fillable =  [

      'id','jemaat_id','nama_calon','hari_nikah','tglnikah','waktu','pendeta','menikah','alamat_calon'

    ];
    public function jemaat()
    {
    	return $this->belongsTo(jemaat::class);
    } 
    public function kk()
    {
    	return $this->hasOne(kk::class);
    }
    public function tambah()
    {
    	return $this->hasOne(tambah::class);
    }
}

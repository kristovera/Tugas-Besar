<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    use HasFactory;
    protected $table='anggota_keluarga';
    protected $fillable =  [

      'id','jemaat_id','tgl-keluar','gerejadituju','alamat_keluar','notelp_keluar'

    ];
    public function jemaat()
    {
    	return $this->belongsTo(jemaat::class);
    } 
}

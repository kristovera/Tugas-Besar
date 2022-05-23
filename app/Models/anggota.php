<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $table='anggota_keluarga';
    protected $fillable =  [

      'id','jemaat_id','hub_anggota'

    ];
    public function jemaat()
    {
    	return $this->belongsTo(jemaat::class);
    } 
}

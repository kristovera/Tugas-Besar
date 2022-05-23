<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baptis extends Model
{
    use HasFactory;
    protected $table='baptis';
    protected $fillable =  [

       'id','jemaat_id',
     'hari_bap','waktu_bap','tglbap','alamat_bap'

    ];
    public function jemaat()
    {
    	return $this->belongsTo(jemaat::class);
    } 

}

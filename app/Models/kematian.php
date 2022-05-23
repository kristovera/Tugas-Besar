<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class kematian extends Model
{
    use softDeletes;

    protected $table='mati';

    protected $fillable =  [

      'id','jemaat_id','usia_mati','wafat'

    ];
    public function jemaat()
    {
    	return $this->belongsTo(jemaat::class);
    } 

   
}


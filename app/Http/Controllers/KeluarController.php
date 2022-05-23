<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluarController extends Controller
{
    
    public function tambah()
    {
    	return view('Keluar.tambah');
    }

    public function  index()
    {
        
        $lu = DB::table('keluar')->get();
        return view('Keluar.index', ['lu' => $lu]);
    }
    public function simpan(Request $request){
        DB::table('keluar')->insert([
            'id_keluar' => $request->id_keluar,
            'tgl_keluar' =>$request->tgl_keluar,
            'namalengkap_keluar' => $request->namalengkap_keluar,
            'alasan' => $request->alasan,
            'alamat_keluar' => $request->alamat_keluar,
            'nohp_keluar' => $request->nohp_keluar,
            'tempat_keluar' => $request->tempat_keluar,
            'lahir_keluar'=> $request->lahir_keluar,
            'gereja_keluar' =>$request->gereja_keluar,
            'alamat' => $request->alamat,
            'notelp_keluar' =>$request->notelp_keluar,
            'pekerjaan'=> $request->pekerjaan
           
          
        ]);
        return redirect('/Keluar/index');
    }
}
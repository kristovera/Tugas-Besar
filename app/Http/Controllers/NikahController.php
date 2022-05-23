<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NikahController extends Controller
{
    
    public function index()
    {
    	return view('Nikah.tambah');
    }
    public function  nikah()
    {
        
        $ni = DB::table('nikah')->get();
        return view('Nikah.index', ['ni' => $ni]);
    }
    public function simpan_nik(Request $request){
        DB::table('nikah')->insert([
            'no_form' => $request->no_form,
            'hari' =>$request->hari,
            'tanggal1' => $request->tanggal1,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'pendeta' => $request->pendeta,
            'namaLK' => $request->namaLK,
            'alamatLK'=> $request->alamatLK,
            'asalgerejaLK' =>$request->asalgerejaLK,
            'nohpLK' => $request->nohpLK,
            'namaP' =>$request->namaP,
            'alamatP'=> $request->alamatP,
            'asalgerejaP'=> $request->asalgerejaP,
            'nohpP' => $request->nohpP
           
          
        ]);
        return redirect('/Nikah/index');
    }
    public function edit($no_form) {
        $ni = DB::table('nikah')->where('no_form',  $no_form)->get();
        return view('Nikah.edit',['ni' =>$ni]);
      
    }
    
    public function update($no_form, Request $request) {
    
        DB::table('nikah')->where('no_form',$no_form)
        ->update([
            'no_form' => $request->no_form,
            'hari' =>$request->hari,
            'tanggal1' => $request->tanggal1,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'pendeta' => $request->pendeta,
            'namaLK' => $request->namaLK,
            'alamatLK'=> $request->alamatLK,
            'asalgerejaLK' =>$request->asalgerejaLK,
            'nohpLK' => $request->nohpLK,
            'namaP' =>$request->namaP,
            'alamatP'=> $request->alamatP,
            'asalgerejaP'=> $request->asalgerejaP,
            'nohpP' => $request->nohpP
           
           
       
        ]);
        return redirect('/Nikah/index')->with('status', 'Berhasil diupdate!');
    
    }
}
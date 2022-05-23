<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\jemaat;

class JemaatController extends Controller
{
    
    public function index()

    {
        $getRow = jemaat::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        $lastId = $getRow->first();
        $kode= "BULU001";
        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "BULU00".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "BULU0".''.($lastId->id + 1);
            } else {
                    $kode = "BULU".''.($lastId->id + 1);
            }
        }
          
        return view('jemaat.tambah_jem', compact('kode'));
    }
    public function jemaat()
    {

        $data = jemaat::all();
       
        return view('jemaat.index', compact('data'));
        

    }

    public function simpan_jem(Request $request){
        DB::table('jemaat')->insert([
            'daftar' => $request->daftar,
            'id' =>$request->id,
            'kode_jem'=>$request->kode_jem,
            'namalengkap_jem' => $request->namalengkap_jem,
            'jk_jem' => $request->jk_jem,
            'tempat' => $request->tempat,
            'tanggal_jem'=>$request->tanggal_jem,
            'status_jem'=> $request->status_jem,
            
            'alamat_jem' => $request->alamat_jem,
            'kelurahan_jem'=>$request->kelurahan_jem,
            'kecamatan_jem'=>$request->kecamatan_jem,
            'kota_jem'=>$request->kota_jem,
            'provinsi_jem'=>$request->provinsi_jem,
            'nohp_jem' => $request->nohp_jem,
            
            'statusgereja' => $request->statusgereja,
     
            'kerja' => $request->kerja,
            'pendidikan' =>$request->pendidikan
            
          
        ]);
        return redirect('/jemaat/index');
    }
    public function edit($id) {
      
        $je= jemaat::findOrFail($id);
        return view('jemaat.edit', compact('je'));
      
    }
    
    public function update($id, Request $request) {
    
        $jem = jemaat::find($id);

        $jem->daftar = $request->input('daftar');
        $jem->kode_jem =$request->input('kode_jem');
        $jem->namalengkap_jem = $request->input('namalengkap_jem');
        $jem->jk_jem  = $request->input('jk_jem');
        $jem->tempat= $request->input('tempat');
        $jem->tanggal_jem = $request->input('tanggal_jem');
        $jem->status_jem = $request->input('status_jem');
        $jem->alamat_jem = $request->input('alamat_jem');
        $jem->kelurahan_jem = $request->input('kelurahan_jem');
        $jem->kecamatan_jem = $request->input('kecamatan_jem');
        $jem->kota_jem = $request->input(' kota_jem');
        $jem->provinsi_jem =$request->input('provinsi_jem');
        $jem->nohp_jem = $request->input('nohp_jem');
       
        $jem->statusgereja = $request->input('statusgereja');
        $jem->kerja = $request->input('kerja');
        $jem->pendidikan = $request->input('pendidikan');
            
       
            $jem->update();

       //return redirect('/jemaat/index')->with('status', 'Berhasil diupdate!');
       return redirect('/jemaat/index');
    
    }
   

}
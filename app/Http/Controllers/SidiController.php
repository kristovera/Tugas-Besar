<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Baptis;
use App\Models\sidi;
use App\Models\jemaat;
use Carbon\Carbon;

class SidiController extends Controller
{
    
    public function tampil()
    {
        
        $si = sidi::all();
        $jemaat = jemaat::all();
    
         return view('Sidi.index',compact('si','jemaat'));
    
    }

    public function create() {
        $jemaat = jemaat::all();
        return view('Sidi.tambah_sidi', compact('jemaat'));
    }

    public function store(Request $request) {
        $si = new sidi();
        $si->waktu_bap = request('waktu_bap');
        $data->hari_bap = request('hari_bap');
        $data->tglbap= request('tglbap');
        $data->jemaat_id = request('jemaat_id');
        $data->save();
        return redirect('/Baptis/index');
    }


public function edit($id) {
    $s= jemaat::findOrFail($id);
        return view('Sidi.editSidi', compact('s'));
  
}

public function update($id, Request $request) {
    
    $si = jemaat::find($id);

  
    $si->kode_jem =$request->input('kode_jem');
    $si->tglsidi_jem = $request->input('tglsidi_jem');
    $si->waktu= $request->input('waktu');
    $si->tanggal_jem = $request->input('tanggal_jem');
    $si->tglsidi_jem = $request->input('tglsidi_jem');
    
    $si->tempat= $request->input('tempat');
    $si->tanggal_jem = $request->input('tanggal_jem');
   
    $si->alamat_jem = $request->input('alamat_jem');
  
    $si->nohp_jem = $request->input('nohp_jem');
    $si->bapak = $request->input('bapak');
    $si->ibu = $request->input('ibu');
    $si->baptis = $request->input('baptis');
    $si->tglbap_jem = $request->input('tglbap_jem');   
    
    $si->nohp_ortu = $request->input('nohp_ortu');   
   

  
    $si->kerja = $request->input('kerja');
    $si->pendidikan = $request->input('pendidikan');
    

        
   
        $si->update();

    return redirect('/Sidi/index')->with('status', 'Berhasil diupdate!');

}
}
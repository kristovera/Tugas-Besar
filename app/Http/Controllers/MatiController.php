<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Models\kematian;
use App\Models\jemaat;

class MatiController extends Controller
{
    
    public function createM()
    {
        
        $ke =jemaat::join('mati','mati.id', '=','mati.jemaat_id')
        ->join('jemaat as j','jemaat.id','=','mati.jemaat_id')
        ->where('jemaat_id')
        ->get(['j.kode_jem','j.namalengkap_jem','j.alamat_jem','mati.usia_mati','mati.wafat']);

        return view('Kematian.create', compact('ke'));
    }
    public function store(Request $request)
    {   
      
        $this->validate($request, [     
            'jemaat_id' => 'required',
            'namalengkap_jem'=>'namalengkap_jem'
         
            
        ]); 
        jemaat::create($request->all());

        Session::flash('message', 'Data anggota keluarga berhasil ditambahkan!');
        Session::flash('message_type', 'success');

        return redirect()->back();

    }


 
    public function getAutocompleteData(Request $request){
        if($request->has('term')){
            return jemaat::where('namalengkap_jem','like','%'.$request->input('term').'%')->get();
        }
    }

  
    public function  Kem()
    {
        
        $ke =jemaat::join('mati','mati.id', '=','mati.jemaat_id')
        ->join('jemaat as j','jemaat.id','=','mati.jemaat_id')
        ->where('jemaat_id')
        ->get(['j.kode_jem','j.namalengkap_jem','j.alamat_jem','mati.usia_mati','mati.wafat']);

        return view('Kematian.index', compact('ke'));
    }
    public function simpan_kem(Request $request){
        DB::table('kematian')->insert([
            'kode_jem' =>$request->kode_jem,
            'namaLengkap' => $request->namaLengkap,
            'usia' =>$request->usia,
            'alamat_kematian' => $request->alamat_kematian,
            'wafat' => $request->wafat,
           
          
        ]);
        return redirect('/Kematian/index');
    }
    public function editKem($id) {
        $ke = DB::table('kematian')->where('id',  $id)->get();
        return view('Kematian.edit',['ke' =>$ke]);
      
    }
    
    public function updateKem($id, Request $request) {
    
        DB::table('kematian')->where('id',$id)
        ->update([
            'namaLengkap' => $request->namaLengkap,
            'usia' =>$request->usia,
            'alamat_kematian' => $request->alamat_kematian,
            'wafat' => $request->wafat,
           
       
        ]);
        return redirect('/Kematian/index')->with('status', 'Berhasil diupdate!');
    
    }
    public function delete($id) {
        $ke = kematian::find($id);
        $ke->delete();
        return redirect('/Kematian/index');
    }
   
     
    


   
}

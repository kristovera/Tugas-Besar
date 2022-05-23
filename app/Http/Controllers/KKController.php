<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kk;
use Session;    
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\jemaat;


class KKController extends Controller
{
    
    public function create()
    {
    	$getRow = kk::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        $lastId = $getRow->first();
        $kode= "KK001";
        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "KK00".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "KK00".''.($lastId->id + 1);
            } else {
                    $kode = "KK".''.($lastId->id + 1);
            }
        }

        $kk= kk::get();

        $kartu = jemaat::join('kk', 'kk.id', '=', 'kk.jemaat_id')
        ->join('jemaat as a','jemaat.id','=','kk.jemaat_id')
        ->where('jemaat_id')
        -> get(['kk.no_kk','a.bapak']);

       // return view('KK.index', compact('kk','kartu'));

      
        return view('KK.create', compact('kode','kk','kartu'));
    }


    public function  kartu()
    {
        $kk= kk::get();
        

        $kartu = jemaat::join('kk', 'kk.id', '=', 'kk.jemaat_id')
        ->join('jemaat as a','jemaat.id','=','kk.jemaat_id')
        ->where('jemaat_id')
        -> get(['kk.no_kk','a.bapak']);

        return view('KK.index', compact('kk','kartu'));
    }




    
    public function  tambahkk($id)
    {
      
        $kk = kk::join('kk', 'kk.id', '=' , 'kk.kk_id')
        ->join('jemaat', 'jemaat.id', '=' , 'kk.jemaat_id')
        ->where('jemaat_id', $id)
        ->get(['jemaat.bapak','kk.no_kk','jemaat.id']);

        $data = kk::findOrFail($id);

        $kk = kk::get();

         return view('KK.create' , compact('kk','data','u'));
    }

    public function  simpankk(Request $request)
    {
           $count = kk::where('no_kk',$request->input('no_kk'))->count();

           $this->validate($request, 
           [
           
            'no_kk' => 'required',
             'bapak'=>'required'
        ]); 
        jemaat::create($request->all());

        Session::flash('message', 'Data kepala keluarga berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        
       //alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect('/KK/index');
    }


    

    
    public function view($id)
    {
        $kk = kk::get();
        
        $kartu = jemaat::join('kk', 'kk.id', '=', 'kk.jemaat_id')
        ->join('jemaat as a','jemaat.id','=','kk.jemaat_id')
        ->where('jemaat_id', $id)
        -> get(['kk.no_kk','kk.peran','a.bapak','a.ibu','a.namalengkap_jem','a.tempat',
                'a.tanggal_jem','a.jk_jem','a.kelurahan_jem','a.kerja']);
                
        $data = kk::where('id',$id)->first();

                return view('KK.view', compact('kk','kartu','data'));

    }

    public function tambah_kk($id)
    {
        $kartu = kk::join('kk', 'kk.id', '=', 'kk.jemaat_id')
        ->join('jemaat as a','jemaat.id','=','kk.jemaat_id')
        ->where('jemaat_id', $id)
        -> get(['kk.no_kk','kk.peran','a.bapak','a.ibu','a.namalengkap_jem','a.tempat',
                'a.tanggal_jem','a.jk_jem','a.kelurahan_jem','a.kerja']);
                

        $k = kk::where([
            ['jemaat_id', '=', 'kk.id']
        ])->get();

        $j = jemaat::WhereNotExists(function($query) {
            $query->select(DB::raw(1))
            ->from('kk')
            ->whereRaw('kk.jemaat_id = jemaat.id');
         })->get();

        $data = kk::findOrFail($id);

        $kk = kk::get();

         return view('KK.create' , compact('j','kk','kartu','k','data'));
    }


}
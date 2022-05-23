<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Baptis;
use App\Models\jemaat;

class BaptisController extends Controller
{
    
    public function tampil()
    {
        
        $data = baptis::all();
        $jemaat = jemaat::all();
    
         return view('Baptis.index',compact('data','jemaat'));
    
    }

    public function create() {
        $jemaat = jemaat::all();
        return view('Baptis.create', compact('jemaat'));
    }

    public function store(Request $request) {
        $data = new baptis();
        $data->waktu_bap = request('waktu_bap');
        $data->hari_bap = request('hari_bap');
        $data->tglbap= request('tglbap');
        $data->jemaat_id = request('jemaat_id');
        $data->save();
        return redirect('/Baptis/index');
    }
    
    public function baptis()
    {
        return view('Baptis.create');
    }

    public function form($id) {

        $data= baptis::findOrFail($id);
        $jemaat = jemaat::all();
        return view('Baptis.edit_bap', compact('data', 'jemaat'));
    }

    public function edit(Request $request, $id) {
        $data= baptis::findOrFail($id);
        $data->waktu_bap = request('waktu_bap');
        $data->hari_bap = request('hari_bap');
        $data->tglbap= request('tglbap');
        $data->jemaat_id = request('jemaat_id');
        $data->save();
        return redirect('/Baptis/index');
    }

    public function delete($id) {
       baptis::where('id', $id)->delete();
       return redirect('/Baptis/index');
    }



}
  



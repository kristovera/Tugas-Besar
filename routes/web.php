<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\SidiController;
use App\Http\Controllers\BaptisController;
use App\Http\Controllers\NikahController;
use App\Http\Controllers\MatiController;
use App\Http\Controllers\KKController;
use App\Http\Controllers\KeluarController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/post',[DashboardController::class,'post']);

//jemaat
Route::get('/jemaat/index', [JemaatController::class,'jemaat']);
Route::get('/jemaat/tambah_jem', [JemaatController::class,'index']);
Route::get('/jemaat/tambah_jem/simpan', [JemaatController::class,'simpan_jem']);
Route::get('/jemaat/edit/{id}', [JemaatController::class,'edit']);
Route::put('/jemaat/ubah/{id}', [JemaatController::class,'update']);
Route::put('/jemaat/delete/{id}', [JemaatController::class,'delete']);

//sidi
Route::get('/Sidi/index', [SidiController::class,'tampil']);
Route::get('/Sidi/tambah_sidi', [SidiController::class,'tambah_sidi']);
Route::get('/Sidi/tambah_sidi/simpan', [SidiController::class,'store']);
Route::get('/Sidi/editSidi/{id}', [SidiController::class,'edit']);
Route::put('/Sidi/ubah/{id}', [SidiController::class,'update']);


//baptis
Route::get('/Baptis/index', [BaptisController::class,'tampil']);
Route::get('/Baptis/create', [BaptisController::class,'create']);
Route::post('/Baptis/create/simpan', [BaptisController::class,'store']);

Route::get('/Baptis/edit_bap/{id}', [BaptisController::class,'form']);
Route::patch('/Baptis/edit/{id}', [BaptisController::class,'edit']);
Route::put('/Baptis/update/{id}', [BaptisController::class,'update']);


//nikah
Route::get('/Nikah/index', [NikahController::class,'nikah']);
Route::get('/Nikah/tambah', [NikahController::class,'index']);
Route::get('/Nikah/tambah/simpan', [NikahController::class,'simpan_nik']);
Route::get('/Nikah/edit/{no_form}', [NikahController::class,'edit']);
Route::put('/Nikah/updated/{no_form}', [NikahController::class,'update']);


//mati
Route::get('/Kematian/index', [MatiController::class,'Kem']);
Route::get('/Kematian/create', [MatiController::class, 'createM']);
Route::get('/Kematian/create/simpan', [MatiController::class, 'store']);
Route::get('/Kematian/api/index',[MatiControllee::class, 'getAutocompleteData']); 
Route::get('/Kematian/edit/{id}', [MatiController::class,'editKem']);
Route::put('/Kematian/updated/{id}', [MatiController::class,'updateKem']);
Route::put('/Kematian/delete/{id}', [MatiController::class,'delete']);




//masuk
Route::get('/Masuk/index', [MasukController::class,'data']);
Route::get('/Masuk/tambah', [MasukController::class,'create']);
Route::get('/Masuk/tambah/simpan', [MasukController::class,'store']);


//keluar
Route::get('/Keluar/index', [KeluarController::class,'index']);
Route::get('/Keluar/tambah', [KeluarController::class,'tambah']);
Route::get('/Keluar/tambah/simpan', [KeluarController::class,'simpan']);

//kk
Route::get('/KK/index', [KKController::class,'kartu']);
//Route::get('/KK/index', [KKController::class,'kartu']);
Route::get('/KK/view/{no_kk}', [KKController::class,'view']);


Route::get('/KK/create', [KKController::class,'create']);
Route::get('/KK/create/simpankk', [KKController::class,'simpankk']);
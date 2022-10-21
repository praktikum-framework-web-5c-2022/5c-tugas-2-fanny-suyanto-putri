<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;

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
    $dsn = [
        'Purwantoro, M.Kom.',
        'Susilawati, M.Si.',
        'Yuyun Umaidah, M.Kom.',
        'Kamal Prihandani, M.Kom',
        'Intan Purnamasaru, M.kom',
        'Apriade Voutama, M.Kom',
        'M. Jajuli, M.Si.',
        'Carudin, M.Kom.',
        'Arip Solehudin, M.Kom.',
        'Dadang Yusuf, M.Kom.',
    ];
    return view('dosen')->with('dosen',$dsn);
});
  
Route::get('/matkul', function (){
    $mk = [
        'Matematika Dasar',
        'Pancasila',
        'Bahasa Inggris',
        'Metode Numerik',
        'Pemrograman Berbasis Web',
        'Basis Data',
        'Keamanan Sistem',
        'Jaringan Komputer',
        'Budaya Bangsa',
        'Pemrograman Berbasis Objek',
    ];
    return view('matakuliah')->with('matkul',$mk);;
});

Route::get('/mahasiswa', function (){
   $mhs = [
       'Fanny Suyantoputri',
       'Rian',
       'Agung Adi Putra',
       'Angel Alda Paulus',
       'Carmelitta',
       'Evita Sari',
       'Wilson Marvin',
       'Revata Tri',
       'Willy Candra',
       'Vionicca',
    ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});


// Route::get('/dosen', [DosenController::class, 'index']);
// Route::get('/dosenSelectRaw', [DosenController::class, 'selectRaw']);
// Route::get('/dosenSelectQueryBuilder', [DosenController::class, 'selectQueryBuilder']);
// Route::get('/dosenSelectEloquent', [DosenController::class, 'selectEloquent']);
// Route::get('/dosenInsertRaw', [DosenController::class, 'insertRaw']);
// Route::get('/dosenInsertQueryBuilder', [DosenController::class, 'insertQueryBuilder']);
// Route::get('/dosenInsertEloquent', [DosenController::class, 'insertEloquent']);
// Route::get('/dosenUpdateRaw', [DosenController::class, 'updateRaw']);
// Route::get('/dosenUpdateQueryBuilder', [DosenController::class, 'updateQueryBuilder']);
// Route::get('/dosenUpdateEloquent', [DosenController::class, 'updateEloquent']);
// Route::get('/dosenDeleteRaw', [DosenController::class, 'deleteRaw']);
// Route::get('/dosenDeleteQueryBuilder', [DosenController::class, 'deleteQueryBuilder']);
// Route::get('/dosenDeleteEloquent', [DosenController::class, 'deleteEloquent']);

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/mahasiswaSelectRaw', [MahasiswaController::class, 'selectRaw']);
// Route::get('/mahasiswaSelectQueryBuilder', [MahasiswaController::class, 'selectQueryBuilder']);
// Route::get('/mahasiswaSelectEloquent', [MahasiswaController::class, 'selectEloquent']);
// Route::get('/mahasiswaInsertRaw', [MahasiswaController::class, 'insertRaw']);
// Route::get('/mahasiswaInsertQueryBuilder', [MahasiswaController::class, 'insertQueryBuilder']);
// Route::get('/mahasiswaInsertEloquent', [MahasiswaController::class, 'insertEloquent']);
// Route::get('/mahasiswaUpdateRaw', [MahasiswaController::class, 'updateRaw']);
// Route::get('/mahasiswaUpdateQueryBuilder', [MahasiswaController::class, 'updateQueryBuilder']);
// Route::get('/mahasiswaUpdateEloquent', [MahasiswaController::class, 'updateEloquent']);
// Route::get('/mahasiswaDeleteRaw', [MahasiswaController::class, 'deleteRaw']);
// Route::get('/mahasiswaDeleteQueryBuilder', [MahasiswaController::class, 'deleteQueryBuilder']);
// Route::get('/mahasiswaDeleteEloquent', [MahasiswaController::class, 'deleteEloquent']);

// Route::get('/matkul', [MatkulController::class, 'index']);
// Route::get('/matkulSelectRaw', [MatkulController::class, 'selectRaw']);
// Route::get('/matkulSelectQueryBuilder', [MatkulController::class, 'selectQueryBuilder']);
// Route::get('/matkulSelectEloquent', [MatkulController::class, 'selectEloquent']);
// Route::get('/matkulInsertRaw', [MatkulController::class, 'insertRaw']);
// Route::get('/matkulInsertQueryBuilder', [MatkulController::class, 'insertQueryBuilder']);
// Route::get('/matkulInsertEloquent', [MatkulController::class, 'insertEloquent']);
// Route::get('/matkulUpdateRaw', [MatkulController::class, 'updateRaw']);
// Route::get('/matkulUpdateQueryBuilder', [MatkulController::class, 'updateQueryBuilder']);
// Route::get('/matkulUpdateEloquent', [MatkulController::class, 'updateEloquent']);
// Route::get('/matkulDeleteRaw', [MatkulController::class, 'deleteRaw']);
// Route::get('/matkulDeleteQueryBuilder', [MatkulController::class, 'deleteQueryBuilder']);
// Route::get('/matkulDeleteEloquent', [MatkulController::class, 'deleteEloquent']);

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});

Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});
<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller{
    public function index(){}
    //Raw
    public function insertRaw(){
        $data = DB::insert("INSERT INTO mahasiswas 
        (nim,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir) VALUES ('20136628','Febby','P','Palembang','PALEMBANG','28 Juli 2002')");
        dump($data);
       }
    public function selectRaw(){
        $data=DB::select("SELECT * FROM Mahasiswas");
        dump($data);
    }
    public function updateRaw(){
        $data = DB::update("UPDATE mahasiswas SET nama='Putri' WHERE nama='Febby'");
        dump($data);
       }
    public function deleteRaw(){
        $data = DB::delete("DELETE FROM Mahasiswas WHERE nama= 'Putri'");
        dump($data);
       }
    //QueryBuilder
   public function insertQueryBuilder(){
    $data = DB::table('Mahasiswas')->insert(
        [
            'nim' => '21097654',
            'nama' => 'Angel',
            'jenis_kelamin' => 'P',
            'alamat' => 'Batam',
            'tempat_lahir' => 'Batam',
            'tanggal_lahir' => '08 Juli 2001',
        ]
        );
    dump($data);
   }
   public function selectQueryBuilder(){
    $data=DB::table("Mahasiswas")->get();
    dump($data);
   }
   public function updateQueryBuilder(){
    $data = DB::table('mahasiswas')
    ->where('nama', 'Angel',)
    ->update(
        [
            'updated_at' => now(),
        ]
        );
    dump($data);
   }
   public function deleteQueryBuilder(){
    $data = DB::table('mahasiswas')
    ->where('nama', 'Angel')
    ->delete();
    dump($data);
   } 
   //Eloquent
   public function insertEloquent(){
    
    Mahasiswa::create(
        [
            'nim' => '29363426',
            'nama' => 'Indira Safa Putri',
            'jenis_kelamin' => 'P',
            'alamat' => '?',
            'tempat_lahir' => '?',
            'tanggal_lahir' => '10 Juli 2000',
        ]
        );
    return "Data Berhasil Disimpan";
   }
   public function selectEloquent(){
    $data = Mahasiswa::all();
    dump($data);
   }
   public function updateEloquent(){
    Mahasiswa::where('nama', 'Indira Safa Putri')->first()->update([
        'nama' => 'Putri Indira'
    ]);
    return "Data Berhasil di Ubah";
   }
   public function deleteEloquent(){
    $data = Mahasiswa::where('nama', 'Putri Indira')->delete();
    return "Data Berhasil Dihapus";
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Support\Facades\DB;
use Illuminate\http\Request;

class DosenController extends Controller{
    public function index(){}
    //Raw
    public function insertRaw()
    {
         $data = DB::insert("INSERT INTO dosens
        (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir) VALUES ('20201021','Agung','L','Bogor','BOGOR','5 Juni 1998')");
        dump($data);
    }
    public function selectRaw(){
    $data=DB::select("SELECT * FROM dosens");
    dump($data);
   }
   public function updateRaw(){
    $data = DB::update("UPDATE dosens SET nama='Adi' WHERE nama='Agung'");
    dump($data);
   }
   public function deleteRaw(){
    $data = DB::delete("DELETE FROM dosens WHERE nama= 'Adi '");
    dump($data);
   }

   //Query Builder 

   public function insertQueryBuilder(){
    $data = DB::table('dosens')->insert(
        [
            'nidn' => '20216345',
            'nama' => 'Evita',
            'jenis_kelamin' => 'P',
            'alamat' => 'Bandung',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '25 April 2001',
        ]
        );
    dump($data);
   }
   public function selectQueryBuilder(){
    $data=DB::table("dosens")->get();
    dump($data);
   }
   public function updateQueryBuilder(){
    $data = DB::table('dosens')
    ->where('nama', 'Evita',)
    ->update(
        [
            'updated_at' => now(),
        ]
        );
    dump($data);
   }
   public function deleteQueryBuilder(){
    $data = DB::table('dosens')
    ->where('nama', 'Evita')
    ->delete();
    dump($data);
   }

   //Eloquent

   public function insertEloquent(){
    Dosen::create(
        [
            'nidn' => '20197756',
            'nama' => 'Revata Tri',
            'jenis_kelamin' => 'L',
            'alamat' => '?',
            'tempat_lahir' => '?',
            'tanggal_lahir' => '15 Agustus 1997',
        ]
        );
    return "Data Berhasil Diproses";
   } 
   public function selectEloquent(){
    $data = Dosen::all();
    dump($data);
   }
   public function updateEloquent(){
    Dosen::where('nama', 'Revata Tri')->first()->update([
        'name' => 'Revata Tri'
    ]);
    return "Data Berhasil di Ubah";
   }
   public function deleteEloquent(){
    $data = Dosen::where('nama', 'Revata Tri')->delete();
    dump($data);
    }
}

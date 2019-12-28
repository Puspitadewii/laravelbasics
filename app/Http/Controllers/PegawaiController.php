<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class PegawaiController extends Controller
{
    //di sini isi controller pegawai
    // public function index(){
    //     $nama = "Tofik";
    //     $skil = ["frontend","backend","hardware","server linux"];
    //     return view('biodata',['nama'=>$nama,'skil'=>$skil]);
    // }
    public function index($nama){//menangkap data dari route
        return $nama;
    }
    public function formulir(){
        return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama saya".$nama.","."Alamat:".$alamat;
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\DataPenduduk;
class PendudukController extends Controller
{
    //

    public function view (){
        $penduduk = \App\DataPenduduk::all(); 
        return view('dapun.home', compact('penduduk'));
    }
    public function viewdakel (){
        return view ('dapun.dakel');
    }
    public function viewrtrw (){
        return view ('dapun.rtrw');
    }
    public function viewprocessed (){
        return view ('processed.dapun');
    }
    public function buatdatapenduduk(Request $request){

        $request->validate([
            'namapenduduk' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
        ]);
        \App\DataPenduduk::create([
            "namapenduduk" => $request -> namapenduduk,
            "tanggallahir" => $request -> tanggallahir,
            "jeniskelamin" => $request -> jeniskelamin,
            "alamat" => $request -> alamat,
        ]);
        return redirect()->route("home.beranda")->with("info","Berhasil Buat Data Penduduk");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Anggota;

class AnggotaController extends Controller
{
    public function index(){
        return view('anggota.index');
    }

    public function dataanggota(){
        $data = Anggota::all();
        return DataTables::of($data)->make(true);
    }

    public function form_anggota(){
        return view('anggota.form_anggota');
    }


    public function store(Request $request){

        $request->validate([
            "nama_lengkap"=>"required",
            "tgl_daftar"=>"required",
            "jk"=>"required",
            "pekerjaan"=>"required",
            "tempat_lahir"=>"required",
            "tgl_lahir"=>"required",
            "alamat"=>"required",
            "kartu_identifikasi"=>"required",
            "nohp"=>"required",
        ]);
        Anggota::create($request->all());
        // return $request;
        return redirect('/anggota')->with('status', 'Data Anggota Berhasil ditambahkan!');
    }
}

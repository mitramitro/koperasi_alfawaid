<?php

namespace App\Http\Controllers;
use DataTables;
use App\Simpanan;
use App\Anggota;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    public function index(){
        return view('simpanan.index');
    }

    public function data_anggota(){
        $data_anggota = Anggota::all();
        return DataTables::of($data_anggota)
        ->addColumn('saldo', '-')
        ->addColumn('aksi', function ($data_anggota) {
            $aksi = '
            <a href="'.url('/simpanan/detile_simpanan/' . $data_anggota->id . '').'"  class="btn btn-warning" title="Download">Tabungan</a>';
            return $aksi;
            
        })
        ->rawColumns(['aksi']) //untuk render buttton atau link
        ->make(true);
    }

    public function detile_simpanan(){
        return view('simpanan.detile_simpanan');
    }

    public function datasimpanan($id){
        $saldo=0;
        $data= Simpanan::where('anggota_id',$id)->get();
        $count = Simpanan::where('anggota_id', $id)->count();

        
        return DataTables::of($data)
        ->editColumn("namae", function ($data) {
            return $data->anggota->nama_lengkap;
        })->editColumn("alamat", function ($data) {
            return $data->anggota->alamat;
        })->addColumn('jumlah_saldo', function($data)use($saldo, $count){ 
            if($count == 1){
            $saldo = $data->jumlah_yangdisetor;
            }else if($data->jumlah_yangdisetor !=0){
           
            return $saldo +=$data->jumlah_yangdisetor;
            }

            // return $saldo;
        //    return $data->sum('jumlah_yangdisetor');
           
            //   dd($data);
            // $transaksiok = Simpanan::where('anggota_id', $data->anggota_id)->count();
            // if($transaksiok == 1){
                // return dd($data);
            // } else{
                // return $saldo;
            // }
            
            // return $transaksi;
            //  $jml_debet = Simpanan::where('anggota_id', $data->anggota_id)->sum('jumlah_yangdisetor');
            //  $jml_kredit = Simpanan::where('anggota_id', $data->anggota_id)->sum('jumlah_yangditarik');
            // return $jml_debet-$data->jumlah_yangditarik;
        })->make(true);
    }


    public function form_simpanan($id){
        $data_anggota = Anggota::where('id',$id)->first();
        return view('simpanan.form_simpanan',compact('data_anggota'));
    }



    public function store(Request $request){

        // $request->validate([
        //     "nama_lengkap"=>"required",
        //     "tgl_daftar"=>"required",
        //     "jk"=>"required",
        //     "pekerjaan"=>"required",
        //     "tempat_lahir"=>"required",
        //     "tgl_lahir"=>"required",
        //     "alamat"=>"required",
        //     "kartu_identifikasi"=>"required",
        //     "nohp"=>"required",
        // ]);
        Simpanan::create($request->all());
        // return $request;
        return redirect('/simpanan/detile_simpanan/'.$request->anggota_id)->with('status', 'Data Anggota Berhasil ditambahkan!');
    }

    


 
}

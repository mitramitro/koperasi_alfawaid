<?php

namespace App\Http\Controllers;
use DataTables;
use App\Simpanan;
use App\Anggota;
use Illuminate\Http\Request;
use DB;

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
        $tot = Simpanan::where('anggota_id', $id)->limit(1)->orderBy('id', 'desc');
        
        return DataTables::of($data)
        ->editColumn("namae", function ($data) {
            return $data->anggota->nama_lengkap;
        })->editColumn("alamat", function ($data) {
            return $data->anggota->alamat;
<<<<<<< HEAD
        })->addColumn('jumlah_saldo', function($data)use($saldo, $count){ 
            if($count == 1){
            $saldo = $data->jumlah_yangdisetor;
            }else if($data->jumlah_yangdisetor !=0){
           
            return $saldo +=$data->jumlah_yangdisetor;
            }

=======
        })->make(true);
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
       
    }


    public function form_simpanan($id){
        $data_anggota = Anggota::where('id',$id)->first();
        return view('simpanan.form_simpanan',compact('data_anggota'));
    }



    public function store(Request $request){
        $simpan = new Simpanan;
        $simpan->anggota_id = $request->anggota_id;
        $simpan->jenis_simpanan = $request->jenis_simpanan;
        $simpan->jenis_transaksi = $request->jenis_transaksi;
        if($request->jenis_transaksi == "Simpanan") {
            $simpan->jumlah_yangdisetor = $request->jumlah_yangdisetor;
        } else {
            $simpan->jumlah_yangditarik = $request->jumlah_yangditarik;
        }
        $simpan->save();

        $sixe = Simpanan::latest()->where('anggota_id', $request->anggota_id)->sum(DB::raw('jumlah_yangdisetor - jumlah_yangditarik'));
        $simpan->jumlah_saldo = $sixe;
        $simpan->update();


        return redirect('/simpanan/detile_simpanan/'.$request->anggota_id)->with('status', 'Data Anggota Berhasil ditambahkan!');
    }

    


 
}

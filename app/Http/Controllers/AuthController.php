<?php

namespace App\Http\Controllers;
use DataTables;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postlogin(Request $request){
        $credentials = $request->only('email','password');
        // dd( $credentials);
        if(Auth::attempt($credentials)){
            return redirect('/dashboard');

        }
        return redirect('/');
    }

    public function userpage(){
        return view('users.index');
    }

    public function datausers(){
        $data = User::all();
        return DataTables::of($data)
        ->editColumn("name", function ($data) {
            return $data->anggota->nama_lengkap;
        })
        ->make(true);
    }

    public function form_users(){
        return view('users.form_user');
    }
}

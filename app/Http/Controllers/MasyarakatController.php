<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index(){
        // buat objek 
        $pakdes = new Masyarakat();
        // return view ('Masyarakat.registar',['bebas'=>$pakdes->all()]);
    }
    public function registrasi(){
        // buat objek
        return view ('Masyarakat.registrasi');
    }
    public function lagideh(Request $request){
        // buat objek
        $udinpers = new Masyarakat();
        // meyimpan data
        $udinpers->create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'telpon'=>$request->telpon,
        ]);
        return redirect();
    }

    public function login(){
        return view('Masyarakat.login');
    }
    public function tampilanuatama(){
        return view('tampilanuatama');
    }

    public function ceklogin(Request $request){
        $m = new Masyarakat();
        // cek username dan password
        if($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('tampilanuatama');
        }
        return back()->with('pesan', 'Username dan Password tidak terdaftar');
    }
    public function dashboard(){
        return view('Administrator.dashboard');
    }
    public function pengaduan(){
        return view('Masyarakat.pengaduan');
    }

    public function validasi(){
        return view('administrator.validasi');
    }
}

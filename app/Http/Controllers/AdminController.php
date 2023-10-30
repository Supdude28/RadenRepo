<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function validasi(){
        $lapor = new Pengaduan();
        return view('administrator.validasi',['ui'=>$lapor->all()]);
    }
    public function dashboard(){
        $lapor = new Pengaduan();
        return view('administrator.dashboard',['au'=>$lapor->all()]);
    }
    public function loginadmin(){
        return view('Administrator.loginadmin');
    }
    public function registrasiadmin(){
        // buat objek
        return view ('Administrator.registrasi2');
    }
    public function ceking(Request $request){
        // buat objek
        $udinpers = new Petugas();
        // meyimpan data
        $udinpers->create([
            'nama_petugas'=>$request->nama_petugas,
            'username'=>$request->username,
            'password'=>$request->password,
            'telp'=>$request->telp,
            'level'=>$request->level
        ]);
        return back()->with('pesan','Anda berhasil mendaftar');
    }
    public function cekloginadmin(Request $request){
        $m = new Petugas();
        // cek username dan password
        $m = $m->where('username',$request->input('username'))->where('password',$request->input('password'));

        if($m->exists()){
            session([
                'username'=> $request->input('username'),
                'password'=> $request->input('password')
            ]);
            return redirect('/adminin');

        }
        
        return back();
    }
    public function logoutadmin(){
        session()->flush();
        return back();
    }

}

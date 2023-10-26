<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function validasi(){
        $lapor = new Pengaduan;
        return view('administrator.validasi',['ui'=>$lapor->all()]);
    }
    public function dashboard(){
        return view('Administrator.dashboard');
    }
    public function loginadmin(){
        return view('Administrator.login2');
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
        ]);
        return back();
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

}

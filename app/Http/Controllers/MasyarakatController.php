<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index(){
        // buat objek 
        $pakdes = new Masyarakat();
        // return view ('Masyarakat.registrasi',['bebas'=>$pakdes->all()]);
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
        return back();
    }

    public function login(){
        return view('Masyarakat.login');
    }
    public function tampilanuatama(){
        return view('Masyarakat.tampilanuatama');
    }

    public function ceklogin(Request $request){
        $m = new Masyarakat();
        // cek username dan password
        $m = $m->where('username',$request->input('username'))->where('password',$request->input('password'));

        if($m->exists()){
            session([
                'username'=> $request->input('username'),
                'password'=> $request->input('password')
            ]);
            return redirect('/masyarakatin');

        }
        
        return back();
    }
    
    public function pengaduan(){
        return view('Masyarakat.pengaduan');
    }

    public function pengaduanin(Request $request){
        // cek data yang dikirimkan
        $tes = $request->validate([
            'nik'=>'required|max:16',
            'tanggal_pengaduan'=>'required|date',
            'isi_laporan'=>'required'
        ]);

        // // upload image
        // $image = $request->file('foto');
        // $image->storeAs('public/posts', $image->hashName());
        $den = new Pengaduan();

        $foto = $request->file('foto');

        // tentukan path file akan di simpan
        $foleder = 'upload_data';

       //  // pindahkan file ke target folder
        $foto->move($foleder, $foto->getClientOriginalName());
    
        $den -> create([
            'nik'=>$request->input('nik'),
            'tanggal_pengaduan'=>$request->input('tanggal_pengaduan'),
            'isi_laporan'=>$request->input('isi_laporan'),
            'foto'=>$foto->getClientOriginalName(),
            'status'=>'0'
        ]);
        return redirect('masyarakatin')->with('pesan','Laporan berhasil dikirim');
         // variable untuk menampung file
    
    }

    // public function validasi(){
    //     return view('administrator.validasi');
    // }
    public function logout(){
        session()->flush();
        return back();
    }

   public function laporin(Request $request){
       
    }

}

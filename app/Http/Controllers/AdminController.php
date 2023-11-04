<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class AdminController extends Controller
{
    public function validasi(){
        $lapor = new Pengaduan();
        return view('administrator.validasi',['ui'=>$lapor->all()]);
    }
    public function tanggap(){
        return view('administrator.validasi');
    }
    public function Datam(){
        $ngb = new Masyarakat();
        return view('administrator.Datam' ,['oi'=>$ngb->all()]);
    }
    public function laporan(){
        $lapor = new Pengaduan();
        return view('Administrator.Laporan',['uo'=>$lapor->all()]);
    }
    public function status($id){
        $dang = new Pengaduan();
        $dang->find($id)->update(['status'=>'proses']);
        return redirect();
    }
    public function dashboard(){
        $status = [
            'masuk' => DB::table('table_pengaduan')->where('status', '0')->count(),
            'proses' => DB::table('table_pengaduan')->where('status', 'proses')->count(),
            'selesai' => DB::table('table_pengaduan')->where('status', 'selesai')->count()
        ];
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
            $bebas = $m->first();
            session(['aing'=>$bebas]);
            return redirect('/adminin');

        }
        
        return back();
    }
    public function logoutadmin(){
        session()->flush();
        return back();
    }

}

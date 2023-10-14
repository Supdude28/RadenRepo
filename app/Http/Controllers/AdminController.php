<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
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

}

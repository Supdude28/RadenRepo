<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function validasi(){
        return view('administrator.validasi');
    }
    public function dashboard(){
        return view('Administrator.dashboard');
    }
}

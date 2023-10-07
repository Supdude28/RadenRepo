<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(){
    return view ('welcome');
});

// data masyrakat
route::get('masyarakat',[MasyarakatController::class,'index']);
route::get('tampilanuatama',[MasyarakatController::class,'tampilanuatama']);





route::get('registrasi',[MasyarakatController::class,'registrasi']);

route::post('lagideh',[MasyarakatController::class,'lagideh']);

route::get('validasi',[AdminController::class,'validasi']);

route::get('login',[MasyarakatController::class,'login']);

route::get('pengaduan',[MasyarakatController::class,'pengaduan']);
route::post('ceklogin',[MasyarakatController::class,'ceklogin']);
route::get('dashboard',[AdminController::class,'dashboard']);
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\Validasiadmin;
use App\Http\Middleware\Validasiini;
use GuzzleHttp\Middleware;
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
    // return view ('Masyarakat.tampilanuatama');
});
route::get('login',[MasyarakatController::class,'login']);


// data masyrakat
route::get('masyarakat',[MasyarakatController::class,'index']);
// route::get('tampilanuatama',[MasyarakatController::class,'tampilanuatama']);
Route::prefix('masyarakatin')->group(function(){
    Route::get('/',function(){
        return view('Masyarakat.tampilanuatama');
    })->middleware(Validasiini::class);
    Route::get('/login',[MasyarakatController::class,'login']);
    Route::post('/login',[MasyarakatController::class,'ceklogin']);
    route::get('/logout',[MasyarakatController::class,'logout']);
});
route::get('pengaduan',[MasyarakatController::class,'pengaduan'])->middleware(Validasiini::class);
route::post('pengaduanin',[MasyarakatController::class,'pengaduanin']);    
route::post('lagideh',[MasyarakatController::class,'lagideh']);
route::get('registrasi',[MasyarakatController::class,'registrasi']);
route::post('lagideh',[MasyarakatController::class,'lagideh']);




// route::get('/',[MasyarakatController::class,'pengaduan']);
// route::post('/',[MasyarakatController::class,'laporin']); 
// admin
// route::get('registrasi2',[AdminController::class,'registrasi2']);



// data admin
route::get('validasi',[AdminController::class,'validasi'])->middleware(Validasiadmin::class);
route::get('Datam',[AdminController::class,'Datam'])->middleware(Validasiadmin::class);

// route::post('ceklogin',[MasyarakatController::class,'ceklogin']);
// route::get('dashboard',[AdminController::class,'dashboard']);
route::prefix('adminin')->group(function(){
    Route::get('/',[AdminController::class,'dashboard'])->middleware(Validasiadmin::class);
        route::get('/loginadmin',[AdminController::class,'loginadmin']);
        route::post('/loginadmin',[AdminController::class,'cekloginadmin']);
        route::get('logoutadmin',[AdminController::class,'logoutadmin']);
        route::get('/status{id}',[AdminController::class,'status'])->middleware(Validasiadmin::class);
        
    });
    route::get('registrasiadmin',[AdminController::class,'registrasiadmin']);
    route::get('tanggapan',[AdminController::class,'tanggap'])->middleware(Validasiadmin::class);
    route::post('ceking',[AdminController::class,'ceking']);
route::get('Laporan',[AdminController::class,'laporan'])->middleware(Validasiadmin::class);



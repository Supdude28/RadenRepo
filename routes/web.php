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
    Route::get('login',[MasyarakatController::class,'login']);
    Route::post('login',[MasyarakatController::class,'ceklogin']);
    route::get('logout',[MasyarakatController::class,'logout']);
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
route::get('validasi',[AdminController::class,'validasi']);
// route::post('ceklogin',[MasyarakatController::class,'ceklogin']);
route::get('dashboard',[AdminController::class,'dashboard']);

route::prefix('adminin')->group(function(){
    Route::get('/',function(){
            return view('Administrator.dashboard');
        })->Middleware(Validasiadmin::class);
        route::get('login2',[AdminController::class,'loginadmin']);
        route::post('login2',[AdminController::class,'cekloginadmin']);
    });
route::get('registrasiadmin',[AdminController::class,'registrasiadmin']);
route::post('ceking',[AdminController::class,'ceking']);

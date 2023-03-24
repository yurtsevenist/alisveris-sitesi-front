<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MesajController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', function () {
//      return view('front.anasayfa');
// });
// Route::get('urunler', function () {
//     return view('front.urunler');
// });

//Route::get('hakkimizda','TeamController@hakkimizda')->name('hakkimizda');
Route::get('/', [UserController::class, 'anasayfa'])->name('anasayfa');
Route::get('hakkimizda', [TeamController::class, 'hakkimizda'])->name('hakkimizda');
Route::post('mesajKaydet',[MesajController::class,'mesajKaydet'])->name('mesajKaydet');
Route::get('urunler',[ProductController::class,'index'])->name('urunler');
Route::get('urunDetay/{id}',[ProductController::class,'urunDetay'])->name('urunDetay');
Route::post('loginPost',[UserController::class,'loginPost'])->name('loginPost');
Route::post('registerPost',[UserController::class,'registerPost'])->name('registerPost');

Route::middleware('auth','verified')->group(function()
{
    Route::get('profil',[UserController::class,'profil'])->name('profil');
    Route::get('sepet',[ProductController::class,'sepet'])->name('sepet');
    Route::get('sepeteEkle',[ProductController::class,'sepeteEkle'])->name('sepeteEkle');
    Route::get('sepetSil',[ProductController::class,'sepetSil'])->name('sepetSil');
    Route::get('urunSil/{id}',[ProductController::class,'urunSil'])->name('urunSil');
    Route::get('adetGuncelle',[ProductController::class,'adetGuncelle'])->name('adetGuncelle');
    Route::post('userUpdate',[UserController::class,'userUpdate'])->name('userUpdate');
    Route::get('logout',[UserController::class,'logout'])->name('logout');
});
Route::get('denied',[UserController::class,'denied'])->name('denied');

Route::get('iletisim', function () {
    return view('front.iletisim');
});
Route::get('login', function () {
    return view('front.auth.login');
});
Route::get('register', function () {
    return view('front.auth.register');
});
Route::get('forget', function () {
    return view('front.auth.forget');
});
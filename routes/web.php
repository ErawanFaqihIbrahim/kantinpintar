<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\kedaiController;
use App\Http\Controllers\pembeliController;
use App\Http\Controllers\favoritController;
use App\http\Controllers\PenilaianMenuController;
use App\http\Controllers\SaldoController;
use App\http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('menu');
});

Route::get('homepage', function () {
    return view('homepage');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('reviewkedai', function () {
	return view('reviewkedai');
});

Route::get('dosen', 'DosenController@index');

Route::get('homepage1', function () {
    return view('homepage1');
});
// Route::get ('/homepage1', [kedaiController::class, 'showKedai']);
Route::get ('/homepage1', [pembeliController::class, 'showSaldo']);
// Route::get ('/homepage1/{kedaiID}', [favoritController::class, 'tambahFavorit']);

Route::get('homepage2', function () {
    return view('homepage2');
});

Route::get('denah', function () {
    return view('denah');
});

Route::get('favorit', function () {
    return view('favorit');
});

Route::get('/homepage1/search',[pembeliController::class,'search']);

Route::get('/home', function () {
    return view('homepage1');
});

Route::get('/rating', function () {
    return view('berirating1');
});

Route::get('/redeem', function () {
    return view('redeemvoucher1');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/formsaldo', function () {
    return view('formsaldo');
});

Route::get('form', [PenilaianMenuController::class,'showForm']);
Route::get('berirating1', [PenilaianMenuController::class,'showFormRating']);
Route::post('berirating1', [PenilaianMenuController::class,'savePenilaian']);

Route::get('formsaldo', [SaldoController::class,'showFormSaldo']);
Route::get('redeemvoucher1', [SaldoController::class,'showFormIsiSaldo']);
// Route::post('redeemvoucher1', [SaldoController::class,'showUpdateSaldo']);
Route::post('redeemvoucher1', [SaldoController::class, 'showUpdateSaldo'])->name('redeemvoucher1');
Route::get('homepage1/{saldo}', [SaldoController::class, 'showHomepage1'])->name('homepage1');
Route::get('jadwal', function () {
    return view('jadwal');
});

Route::get('/jadwal', [jadwalController::class, 'showJadwal']);

Route::get('selesai', function () {
    return view('selesai');
});

Route::get('/selesai', [selesaiController::class, 'selesai']);

Route::get('diproses', function () {
    return view('diproses');
});

Route::get('/diproses', [diprosesController::class, 'showDiproses']);

// INI PUNYA BINTANG

Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('actionregisterPembeli', [App\Http\Controllers\LoginController::class, 'actionregisterPembeli'])->name('actionregisterPembeli');
Route::post('actionregisterPenjual', [App\Http\Controllers\LoginController::class, 'actionregisterPenjual'])->name('actionregisterPenjual');
Route::post('actionloginPenjual', [App\Http\Controllers\LoginController::class, 'actionloginPenjual'])->name('actionloginPenjual');
Route::post('actionloginPembeli', [App\Http\Controllers\LoginController::class, 'actionloginPembeli']);
Route::post('actionregisterKedai', [App\Http\Controllers\KedaiController::class, 'actionregisterKedai']);

Route::get('welcome', function () {
    return view('landingpage');
});

Route::middleware(['guest'])->group(function () {
    // Taruh route yg butuh sudah ter login disini
    Route::get('masuksbg', function () {
        return view('masuksebagai');
    });
    Route::get('signuppenjual', function () {
        return view('daftarpenjual');
    });
    Route::get('signuppembeli', function () {
        return view('daftarpembeli');
    });
    Route::get('loginpenjual', function () {
        return view('masukpenjual');
    });
    Route::get('loginpembeli', function () {
        return view('masukpembeli');
    });
    Route::get('daftarkedai', function () {
        return view('daftarkedai2');
    });
    Route::get('editkedai', function () {
        return view('editkedai');
    });
});

Route::middleware(['autentikasi'])->group(function () {
    // Taruh route yg butuh sudah ter login disini
    Route::get('/tes', function() {
        return "tes";
    });
    Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});

<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\kedaiController;
// use App\Http\Controllers\pembeliController;
// use App\Http\Controllers\favoritController;



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

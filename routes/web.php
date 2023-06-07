<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kedaiController;

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



Route::get('halo', function () {
	return "Halo, bang";
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
Route::get ('/homepage1', [kedaiController::class, 'showKedai']);

Route::get('homepage2', function () {
    return view('homepage2');
});

Route::get('denah', function () {
    return view('denah');
});

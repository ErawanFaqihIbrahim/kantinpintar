<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;

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
    return view('welcome');
});

// liat halaman menu
Route::view('/menu', 'menu');
Route::get ('/menu', [menuController::class, 'showMenu']);

//nambah menu
Route::view('/menu/tambahmenu', 'tambahmenu');

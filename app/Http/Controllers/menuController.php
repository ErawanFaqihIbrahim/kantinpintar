<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class menuController extends Controller
{
    public function showMenu()
    {
        $dataMenu = DB::table('menu')->get();
        return view('menu', ['dataMenu' => $dataMenu] );
    }
}





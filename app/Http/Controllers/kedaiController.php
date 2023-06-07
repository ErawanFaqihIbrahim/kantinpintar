<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class kedaiController extends Controller
{
    public function showKedai()
    {
        $dataKedai = DB::table('kedai')->get();

        return view('homepage1', ['dataKedai' => $dataKedai] );

    }
 }


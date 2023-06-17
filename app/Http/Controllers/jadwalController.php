<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class jadwalController extends Controller
{
    public function showJadwal()
    {
        $jadwalKedai = DB::table('kedai')->get();
        $showRating = DB::table('penilaian')
        ->avg('penilaianRating');
        return view('jadwalkedai', ['jadwalKedai' => $jadwalKedai, 'showRating' => $showRating]);


    }

}
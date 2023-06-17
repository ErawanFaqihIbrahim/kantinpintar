<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class diprosesController extends Controller
{
    public function showDiproses()
    {
        $akunNama = DB::table('akunpembeli')->get();
        $selesaiPembeli = DB::table('transaksi')->get();
        return view('diproses', [ 'akunNama' => $akunNama , 'selesaiPembeli' => $selesaiPembeli] );
    }
}





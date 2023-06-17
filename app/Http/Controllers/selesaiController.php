<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class selesaiController extends Controller
{
    public function selesai()
    {
        $akunNama = DB::table('akunpembeli')->get();
        $selesaiPembeli = DB::table('transaksi')->get();
        return view('selesai', [ 'akunNama' => $akunNama , 'selesaiPembeli' => $selesaiPembeli] );
    }
}





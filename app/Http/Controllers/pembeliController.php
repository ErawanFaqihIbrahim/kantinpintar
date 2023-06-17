<?php

namespace App\Http\Controllers;

use App\Models\kedai;
use App\Models\akunPembeli;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\codetopup;
use Illuminate\Support\Facades\DB;

class pembeliController extends Controller
{
    public function showSaldo(){
        $dataAkunPembeli = DB::table('akunpembeli')->get();
        $dataKedai = DB::table('kedai')->get();

        $saldoTerbaru = session('saldoJumlah'); // Ambil saldo terbaru dari session

        return view('homepage1', ['dataAkunPembeli' => $dataAkunPembeli, 'dataKedai' => $dataKedai, 'saldoTerbaru' => $saldoTerbaru]);
    }

    public function search(Request $request) {
        $dataAkunPembeli = DB::table('akun_pembelis')->get();
        if($request->has('search')) {
            $dataKedai = kedai::where('kedaiNama', 'LIKE','%'.$request->search.'%')->get();

        }
        else {
            $dataKedai = kedai::all();
        }
        return view('homepage1', ['dataAkunPembeli' => $dataAkunPembeli, 'dataKedai' => $dataKedai] );
    }
}

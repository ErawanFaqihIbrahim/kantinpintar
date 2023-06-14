<?php

namespace App\Http\Controllers;

use App\Models\kedai;
use App\Models\akunPembeli;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pembeliController extends Controller
{
    public function showSaldo()
    {
        $dataAkunPembeli = DB::table('akun_pembelis')->get();
        $dataKedai = DB::table('kedais')->get();

        return view('homepage1', ['dataAkunPembeli' => $dataAkunPembeli, 'dataKedai' => $dataKedai] );
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

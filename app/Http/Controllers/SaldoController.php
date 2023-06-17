<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodeTopUp;
use App\Models\AkunPembeli;
use Illuminate\Support\Facades\DB;

class SaldoController extends Controller
{
    //
    public function showFormIsiSaldo(Request $request){

        $akunPembeliID = $request->input('akunPembeliID');
        $request->session()->put('akunPembeliID', $akunPembeliID);

        return view('redeemvoucher1');

    }

    public function showFormSaldo(){
        return view('formsaldo');
    }

    // public function showUpdateSaldo(Request $request){

    //     $akunPembeliID = $request->session()->get('akunPembeliID');
    //     $nominalTU = $request->input('kodetopup');

    //     DB::table('codetopup')->insert([
    //         'akunPembeliID' => $akunPembeliID,
    //         'nominalTU' => $nominalTU,
    //     ]);

    //     $saldoSebelumnya = DB::table('akunPembeli')->where('akunPembeliID', $akunPembeliID)->value('saldoJumlah');
    //     $saldoTerbaru = $saldoSebelumnya + $nominalTU;
    //     DB::table('akunPembeli')->where('akunPembeliID', $akunPembeliID)->update(['saldoJumlah' => $saldoTerbaru]);

    //     $request->session()->put('saldoJumlah', $saldoTerbaru);
    //     // return redirect('homepage1');
    //     return redirect()->route('homepage1', ['saldo' => $saldoTerbaru]);

    //     // Ambil saldo terbaru dari database
    //     $saldoTerbaru = DB::table('akunPembeli')->where('akunPembeliID', $akunPembeliID)->value('saldoJumlah');

    //     // $request->session()->put('saldoJumlah', $saldoTerbaru);
    //     // return redirect('homepage1');

    //     // Simpan saldo terbaru ke dalam session
    //     Session::put('saldoJumlah', $saldoTerbaru);

    //     // Redirect ke halaman homepage1
    //     return redirect()->route('homepage1');

    // }

    public function showUpdateSaldo(Request $request){

        $akunPembeliID = $request->session()->get('akunPembeliID');
        $nominalTU = $request->input('kodetopup');

        DB::table('codetopup')->insert([
            'akunPembeliID' => $akunPembeliID,
            'nominalTU' => $nominalTU,
        ]);

        $saldoSebelumnya = DB::table('akunPembeli')->where('akunPembeliID', $akunPembeliID)->value('saldoJumlah');
        $saldoTerbaru = $saldoSebelumnya + $nominalTU;
        DB::table('akunPembeli')->where('akunPembeliID', $akunPembeliID)->update(['saldoJumlah' => $saldoTerbaru]);

        $request->session()->put('saldoJumlah', $saldoTerbaru);

        // Redirect ke halaman homepage1 dengan saldo terbaru
        // return redirect()->route('homepage1')->with('saldoTerbaru', $saldoTerbaru);
        // return redirect()->route('homepage1')->with('saldoJumlah', $saldoTerbaru);
        return redirect()->route('homepage1', ['saldo' => $saldoTerbaru]);



    }

    public function showHomepage1($saldoTerbaru){
        // Logika atau operasi lain yang diperlukan
        return view('homepage1', ['saldo' => $saldoTerbaru]);

    }

}



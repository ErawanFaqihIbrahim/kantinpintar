<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ListPesanan;
use App\Models\Pesanan;
use App\Models\AkunPembeli;
use App\Models\Transaksi;

class BayarController extends Controller
{
    public function showSuccessBayar($pesananID) {

        $dataListPesanan = ListPesanan::where('pesananID', $pesananID)->get();
        $total = $dataListPesanan->sum('pesananHarga');
        return view('suksesbayar', [
            'pesananID'=> $pesananID,
            'total'=>$total
        ]);
    }

    public function bayarPesanan($pesananID)
    {

        //ngambil total harga
        $dataListPesanan = ListPesanan::where('pesananID', $pesananID)->get();
        $total = $dataListPesanan->sum('pesananHarga');

        //ngambil menu pesanan
        $dataMenuPesanan = DB::table('list_pesanans')
        ->leftjoin('menus', 'list_pesanans.menuID', '=', 'menus.menuID')
        ->where('pesananID', $pesananID)
        ->get();

        //ngambilpesananID
        $dataPesanan = Pesanan::where('pesananID', $pesananID)->first();

        //ngambil akunPenjualID
        $dataMenu = DB::table('menus')
            ->leftjoin('kedais', 'menus.kedaiID', '=', 'kedais.kedaiID')
            ->where('menus.menuID', ($dataListPesanan->first())->menuID)
            ->first();

        //ngambil data pembeli kurangin saldo
        $dataPembeli = AkunPembeli::where('akunPembeliID', $dataPesanan->akunPembeliID)->first();
        $dataPembeli->saldoJumlah = ($dataPembeli->saldoJumlah) - $total;
        $dataPembeli->update();

        //buat transaksi baru
        $dataTransaksi = new Transaksi;
        date_default_timezone_set('Asia/Jakarta');
        $dataTransaksi->transaksiWaktu = date('Y/m/d  H:i:s');

        $dataTransaksi->akunPembeliID = $dataPesanan->akunPembeliID;
        $dataTransaksi->pesananID = $pesananID;
        $dataTransaksi->akunPenjualID = $dataMenu->akunPenjualID;
        $dataTransaksi->save();

        return view('invoice', [
            'total' => $total,
            'dataPembeli' => $dataPembeli,
            'dataListPesanan' => $dataListPesanan,
            'dataPesanan'=>$dataPesanan,
            'dataTransaksi'=>$dataTransaksi,
            'dataMenuPesanan'=>$dataMenuPesanan,
            'pesananID'=>$pesananID
        ]);
        // return redirect('/homepage2');

    }


}

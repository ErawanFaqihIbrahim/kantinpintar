<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Menu;
use App\Models\ListPesanan;
use Illuminate\Support\Facades\DB;



class PesananController extends Controller
{
    public function tambahPesanan($menuID, Request $req)
    {
        $dataMenu = Menu::find($menuID);
        $latest = Pesanan::latest('pesananID')->first();
        $cektransaksi = DB::table('transaksi')->where('pesananID', $latest->pesananID)->get();

        //kalo udah dibayar (ada di tabel transaksi) buat pesanan baru
        if (count($cektransaksi) != 0) {

            $dataPesanan = new Pesanan;
            $dataPesanan->akunPembeliID = 1;
            $dataPesanan->save();
            $newid = $dataPesanan->pesananID;

            $dataListPesanan = new ListPesanan;
            $dataListPesanan->pesananID = $newid;
            $dataListPesanan->menuID = $menuID;
            $dataListPesanan->pesananHarga = ($dataMenu->menuHarga) * $req->input('input');
            $dataListPesanan->pesananJumlah = $req->input('input');
            $dataListPesanan->save();

        }

        //kalo belum dibayar (nggak ada di tabel transaksi) pake pesanan yang terbaru
        else {
            $dataListPesanan = new ListPesanan;
            $dataListPesanan->pesananID = $latest->pesananID;
            $dataListPesanan->menuID = $menuID;
            $dataListPesanan->pesananHarga = ($dataMenu->menuHarga) * $req->input('input');
            $dataListPesanan->pesananJumlah = $req->input('input');
            $dataListPesanan->save();

        }

        return redirect('/keranjang');


    }

    public function showPesanan()
    {
        $latest = Pesanan::latest('pesananID')->first();
        $pesananID = $latest->pesananID;

        $cektransaksi = DB::table('transaksi')->where('pesananID', $latest->pesananID)->get();

        $total = ListPesanan::where('pesananID', $pesananID)->sum('pesananHarga');

        $dataPesanan = DB::table('listpesanan')
            ->crossjoin('menu', 'listpesanan.menuid', '=', 'menu.menuid')
            ->where('listpesanan.pesananID', $pesananID)
            ->get();

        $pesanan = $dataPesanan->first();

        return view('pesanan', [
            'dataPesanan' => $dataPesanan,
            'pesanan' => $pesanan,
            'total' => $total,
            'cektransaksi' => $cektransaksi,
            'pesananID'=>$pesananID
        ]);
    }

    public function hapusPesanan($pesananID, $pesananJumlah, $menuNama)
    {
        $dataMenu = Menu::where('menuNama', $menuNama)->first();
        $menuID = $dataMenu->menuID;
        $dataPesanan= Pesanan::where('pesananID', $pesananID)->get();
        $dataListPesanan = ListPesanan::where('pesananID',$pesananID)
        ->where('pesananJumlah',$pesananJumlah)
        ->where('menuID',$menuID)
        ->delete();
        return redirect('/keranjang')->with(compact('dataPesanan'));
    }


}

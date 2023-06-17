<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\Menu;
use App\Models\ListPesanan;

class menuController extends Controller
{
    // public function showMenu()
    // {
    //     $dataMenu = DB::table('menu')->get();
    //     return view('menu', ['dataMenu' => $dataMenu] );
    // }

    public function showMenu($kedaiID)
    {

        $kedaiID = 6;

        $latest = Pesanan::latest('pesananID')->first();
        $pesananID = $latest->pesananID;

        $dataMenu = Menu::where('kedaiID', $kedaiID)->get();

        $namaKedai = DB::table('menu')
            ->join('kedai', 'menu.kedaiID', '=', 'kedai.kedaiID')
            ->where('kedai.kedaiID', $kedaiID)
            ->first();

        $cektransaksi = DB::table('transaksi')->where('pesananID', $latest->pesananID)->get();
        if (count($cektransaksi) != 0) {
            $jumlah = 0;
            $total = 0;
        } else {
            $jumlah = ListPesanan::where('pesananID', $pesananID)->sum('pesananJumlah');
            $total = ListPesanan::where('pesananID', $pesananID)->sum('pesananHarga');
        }

        return view('menupembeli', [
            'dataMenu' => $dataMenu,
            'jumlah' => $jumlah,
            'total' => $total,
            'namaKedai' => $namaKedai
        ]);

    }

    public function showDetailMenu($menuID)
    {
        $detailMenu = Menu::find($menuID);
        return view('detailmenu', ['detailMenu' => $detailMenu]);
    }

    //upload menu penjual
    public function showFormMenu()
    {
        $kedaiID = 6;

        return view(
            'uploadmenu',
            [
                'kedaiID' => $kedaiID
            ]
        );
    }

    public function uploadMenu(Request $req)
    {
        $kedaiID = 6;

        $file = $req->file('menuGambar');
        $tujuan = 'image';

        $datauploadmenu = new Menu;
        $datauploadmenu->menuNama = $req->menuNama;
        $datauploadmenu->menuHarga = $req->menuHarga;
        $datauploadmenu->menuGambar = $file->getClientOriginalName();
        $datauploadmenu->menuDeskripsi = $req->menuDeskripsi;
        $datauploadmenu->kedaiID = $kedaiID;

        $file->move($tujuan, $file->getClientOriginalName());


        $datauploadmenu->save();


        return redirect('menukedai');
    }

    public $showMenu;

    //kayakny hide n show dihilangin(?) klo udh di hide mereka shownya lagi gimana
    public function showMenuKedai()
    {
        $kedaiID = 6;
        $jumlahmenupenjual = Menu::where('kedaiID', $kedaiID)->count();
        $menupenjual = Menu::where('kedaiID', $kedaiID)->get();
        return view('menukedai', ['menupenjual' => $menupenjual, 'jumlahmenupenjual' => $jumlahmenupenjual]);

    }

    public function editMenu($menuID)
    {
        $dataMenu = Menu::find($menuID);
        return view('editmenu', ['dataMenu' => $dataMenu]);

    }

    public function updateMenu(Request $req, $menuID)
    {
        $kedaiID = 6;

        $datauploadmenu = Menu::find($menuID);
        $datauploadmenu->menuNama = $req->menuNama;
        $datauploadmenu->menuHarga = $req->menuHarga;
        $datauploadmenu->menuDeskripsi = $req->menuDeskripsi;
        $datauploadmenu->kedaiID = $kedaiID;

        $file = $req->file('menuGambar');

        if ($file) {
            $tujuan = 'image';
            $datauploadmenu->menuGambar = $file->getClientOriginalName();
            $file->move($tujuan, $file->getClientOriginalName());
        }

        $datauploadmenu->update();

        return redirect('menukedai');
    }



}





<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penilaian;
use App\Models\Menu;
use App\Models\AkunPembeli;
use Illuminate\Support\Facades\DB;

class PenilaianMenuController extends Controller
{

    public function showFormRating(Request $request){

        $akunPembeliID = $request->input('akunPembeliID');
        $request->session()->put('akunPembeliID', $akunPembeliID);

        $menuID = $request->input('menuID');
        $request->session()->put('menuID', $menuID);

        $menuNama = Menu::join('penilaian', 'penilaian.menuID', '=', 'menu.menuID')
        -> where('penilaian.akunPembeliID', $akunPembeliID)
        -> where('penilaian.menuID', $menuID)
        -> pluck('menu.menuNama')
        -> first();

        // // Query ke database untuk mendapatkan menuNama
        // $menu = Menu::find($menuID);
        // $menuNama = $menu->menuNama;

        return view('berirating1', ['menuNama' => $menuNama]);

    }


    public function showForm(){
        return view('form');
    }

    public function savePenilaian(Request $request){

        $akunPembeliID = $request->session()->get('akunPembeliID');
        $menuID = $request->session()->get('menuID');
        $penilaianRating = $request->input('rating');
        $penilaianReview = $request->input('isiKomentar');

        DB::table('penilaian')->insert([
            'akunPembeliID' => $akunPembeliID,
            'menuID' => $menuID,
            'penilaianRating' => $penilaianRating,
            'penilaianReview' => $penilaianReview,
        ]);

        return redirect('form');
    }

    // function savePenilaian(Request $request)
    // {
    //     // $penilaian= new Penilaian;
    //     // $penilaian->penilaianRating=$request->rating;
    //     // $penilaian->penilaianReview=$request->isiKomentar;
    //     // $penilaian->save();

    //     $akunPembeliID = request('akunPembeliID');
    //     $penilaianRating = request('penilaianRating');
    //     $penilaianReview = request('penilaianReview');

    //     DB::table('penilaian')->insert([
    //         'akunPembeliID' => $akunPembeliID,
    //         'penilaianRating' => $penilaianRating,
    //         'penilaianReview' => $penilaianReview,
    //     ]);
    //     return redirect('berirating1');

    // }

}


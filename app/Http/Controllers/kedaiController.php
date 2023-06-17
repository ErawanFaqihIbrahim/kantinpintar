<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KedaiController extends Controller{

    public function showKedai()
    {
        $dataKedai = DB::table('kedai')->get();

        return view('homepage1', ['dataKedai' => $dataKedai] );

    }

    public function index()
    {
        if (Auth::check()) {
            return redirect('daftarkedai');
        }else{
            return view('daftarkedai2');
        }
    }

public function actionregisterKedai(Request $request)
    {
        $user = new \App\Models\Kedai;

        $user->kedaiNama = $request->NamaKedai;
        $user->kedaiKeterangan = $request->kedaiKeterangan;
        $user->kedaiBuka = $request->kedaiBuka;
        $user->kedaiTutup = $request->kedaiTutup;
        $user->kedaiLogo = $file->getClientOriginalName();

        $user->save();
        return redirect('loginpenjual');
    }

    public function updateKedai(Request $request)
    {

        $user = Kedai::find($kedaiID);
        $user->kedaiNama = $request->NamaKedai;
        $user->kedaiKeterangan = $request->kedaiKeterangan;
        $user->kedaiBuka = $request->kedaiBuka;
        $user->kedaiTutup = $request->kedaiTutup;
        // $user->kedaiID = $kedaiID;

        $file = $req->file('kedaiLogo');

        if ($file) {
            $tujuan = 'image';
            $user->kedaiLogo = $file->getClientOriginalName();
            $file->move($tujuan, $file->getClientOriginalName());
        }

        $user->update();

        return redirect('homepage2');
    }

}


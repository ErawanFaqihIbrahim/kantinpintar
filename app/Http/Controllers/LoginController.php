<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('landingpage');
        }else{
            return view('landingpage');
        }
    }

    public function signup()
    {
        return view('signuppenjual');
    }


    // public function login(){
    //     if (Auth::check()) {
    //     return redirect("signuppenjual");
    // }else{
    //     return view("loginpenjual");
    // }
    // }

    public function actionloginPenjual(Request $request)
    {
        $attempt = Auth::guard('akunpembeli')->attempt(['akunEmail' => $request->email, 'password' => $request->password]);

        if ($attempt) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionregisterPembeli(Request $request)
    {
        $user = new \App\Models\AkunPembeli;

        $user->akunEmail = $request->akunEmail;
        $user->akunNama = $request->akunNama;
        $user->akunPassword = Hash::make($request->akunPassword);
        $user->saldoJumlah = 0;

        $user->save();
        return redirect('loginpembeli');
    }

    public function actionregisterPenjual(Request $request)
    {
        $user = new \App\Models\AkunPenjual;

        $user->akunEmail = $request->akunEmail;
        $user->akunNama = $request->akunNama;
        $user->akunPassword = Hash::make($request->akunPassword);
        // $user->saldoJumlah = 0;

        $user->save();
        return redirect('daftarkedai');
    }

    public function actionloginPembeli(Request $request)
    {
        $attempt = Auth::guard('akunpembeli')->attempt(['akunEmail' => $request->email, 'password' => $request->password]);

        if ($attempt) {
            return redirect('landingpage');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }


    public function logout(Request $request)
    {
        session()->invalidate();

        return redirect()->route('login');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Erawan Faqih Ibrahim";
        $pelajaran = ["Algoritma", "Matematika", "Pemrograman", "Sistem Enterprise"];
    	return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\favorit;
// use App\Models\ListPesanan;
// use App\Models\Pesanan;
// use App\Models\Pembeli;

require_once("connect.php");

if (isset($_GET["akunPembeliID"])){
    $akunPembeliID = $_GET["akunPembeliID"];
    $favID = $_GET["favID"];

    $SELECT = $connect->prepare("SELECT * FROM favbutton WHERE akunPembeliID = ?");
    $SELECT->execute([$akunPembeliID]);
    $number=$select->rowCount();
    if($number>0){
        $delete = $connect->prepare("DELETE FROM favbutton WHERE favID = ?");
        $delete->execute([$favID]);
    }else {
        $insert = $connect->prepare("INSERT INTO favbutton(akunPembeliID,favID) values (?,?)");
        $insert->execute([$akunPembeliID,$favID]);
    }
}

// class favoritController extends Controller
// {
//     public function tambahFavorit($kedaiID) {

//         $favKedai =  Kedai::find($kedaiID);

//         $dataListFavorit = new Favorit;
//         $dataListFavorit-> kedaiID = $kedaiID;
//         $dataListFavorit -> save();

//     }
// }

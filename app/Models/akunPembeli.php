<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akunPembeli extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public $timestamps=false;

    protected $table = "akunpembeli";
    public function penilaian(){
        //samain kayak nama model yang mau kamu sambungin
        return $this->belongsTo('App\Models\Penilaian');
    }

    public function codetopup(){
        return $this->hasMany('App\Models\CodeTopUp');
    }
}

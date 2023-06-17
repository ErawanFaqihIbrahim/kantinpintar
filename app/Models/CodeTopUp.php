<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeTopUp extends Model
{
    use HasFactory;
    protected $table = "codetopup";

    public function akunpembeli(){
        //samain kayak nama model yang mau kamu sambungin
        return $this->belongsTo('App\Models\AkunPembeli');
    }
}

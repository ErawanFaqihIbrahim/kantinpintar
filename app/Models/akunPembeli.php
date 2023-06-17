<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;

class AkunPembeli extends Model implements AuthenticatableContract
{
    use HasFactory, Authorizable, Authenticatable;

    public $timestamps=false;
    protected $table = 'akunpembeli';


    public function penilaian(){
        //samain kayak nama model yang mau kamu sambungin
        return $this->belongsTo('App\Models\Penilaian');
    }

    public function codetopup(){
        return $this->hasMany('App\Models\CodeTopUp');
    }


    protected $fillable = [
        'akunEmail',
        'akunNama',
        'akunPassword',
        'saldoJumlah',
    ];
    protected $hidden = ['akunPassword'];
    protected $primaryKey = 'akunPembeliID';
    protected $dates = ['created_at', 'updated_at'];

    public function getAuthPassword()
    {
        return $this->akunPassword;
    }
}

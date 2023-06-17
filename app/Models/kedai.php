<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;

class kedai extends Model implements AuthenticatableContract
{
    use HasFactory, Authorizable, Authenticatable;

    protected $table = 'Kedai';

    protected $fillable = [
        'kedaiNama',
        'kedaiKeterangan',
        'kedaiBuka',
        'kedaiTutup',
    ];
    // protected $hidden = ['akunPassword'];
    protected $primaryKey = 'kedaiID';
    // protected $dates = ['created_at', 'updated_at'];

    // public function getAuthPassword()
    // {
    //     return $this->akunPassword;
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;

class AkunPenjual extends Model implements AuthenticatableContract
{
    use HasFactory, Authorizable, Authenticatable;

    protected $table = 'akunpenjual';

    protected $fillable = [
        'akunEmail',
        'akunNama',
        'akunPassword',
    ];
    protected $hidden = ['akunPassword'];
    protected $primaryKey = 'akunPenjualID';
    protected $dates = ['created_at', 'updated_at'];

    public function getAuthPassword()
    {
        return $this->akunPassword;
    }
}

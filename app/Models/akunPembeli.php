<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akunPembeli extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public $timestamps=false;
}

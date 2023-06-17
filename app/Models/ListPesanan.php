<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPesanan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'listpesanan';


        protected $fillable = [
            'pesananID',
            'menuID',
            'pesananJumlah',
            'pesananHarga'
        ];
        protected $primarykey = 'pesananID';

}

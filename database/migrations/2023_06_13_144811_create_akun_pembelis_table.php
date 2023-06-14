<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunPembelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_pembelis', function (Blueprint $table) {
            $table->id();
            $table->string('akunEmail');
            $table->string('akunNama');
            $table->string('akunPassword');
            $table->integer('saldoJumlah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_pembelis');
    }
}

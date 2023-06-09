<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKedaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kedais', function (Blueprint $table) {
            $table->id();
            $table->string('kedaiNama');
            $table->string('kedaiBuka');
            $table->string('kedaiTutup');
            $table->string('kedaiLogo');
            $table->string('kedaiKeterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kedais');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblanggotakeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblanggotakeluarga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("keluarga_id");
            $table->foreign("keluarga_id")->references("id")->on("tblkeluarga");
            $table->unsignedBigInteger("penduduk_id");
            $table->foreign("penduduk_id")->references("id")->on("tblpenduduk");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblanggotakeluarga');
    }
}

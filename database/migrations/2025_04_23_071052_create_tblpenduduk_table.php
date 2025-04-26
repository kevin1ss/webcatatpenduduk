<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpenduduk', function (Blueprint $table) {
            $table->id();
            $table->string("namapenduduk",100);
            $table->date('tanggallahir');
            $table->string("jeniskelamin",100);
            $table->string("alamat",100);
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
        Schema::dropIfExists('tblpenduduk');
    }
}

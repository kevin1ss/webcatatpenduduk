<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblrtrwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrtrw', function (Blueprint $table) {
            $table->id();
            $table->string("rt",100);
            $table->string("rw",100);
            $table->unsignedBigInteger("kelurahan_id");
            $table->foreign("kelurahan_id")->references("id")->on("tblkelurahan");
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
        Schema::dropIfExists('tblrtrw');
    }
}

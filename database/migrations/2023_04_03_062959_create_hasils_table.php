<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_user');
            $table->unsignedBigInteger('kode_penyakit');
            $table->unsignedBigInteger('kode_hama');
            $table->unsignedBigInteger('kode_gejala');
            $table->foreign('kode_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kode_penyakit')->references('id')->on('penyakits')->onDelete('cascade');
            $table->foreign('kode_hama')->references('id')->on('hamas')->onDelete('cascade');
            $table->foreign('kode_gejala')->references('id')->on('gejalas')->onDelete('cascade');
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
        Schema::dropIfExists('hasils');
    }
};

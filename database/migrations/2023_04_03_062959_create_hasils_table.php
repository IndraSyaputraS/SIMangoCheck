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
            $table->foreign('kode_user')->references('id')->on('users');
            $table->foreign('kode_penyakit')->references('id')->on('penyakits');
            $table->foreign('kode_hama')->references('id')->on('hamas');
            $table->foreign('kode_gejala')->references('id')->on('gejalas');
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

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
        Schema::create('hamas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hama');
            $table->string('foto_hama');
            $table->text('deskripsi_hama');
            $table->text('solusi_hama');
            $table->unsignedBigInteger('kode_obat');
            $table->foreign('kode_obat')->references('id')->on('obats');
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
        Schema::dropIfExists('hamas');
    }
};

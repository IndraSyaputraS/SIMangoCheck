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
        Schema::create('penyakits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyakit');
            $table->string('foto_penyakit');
            $table->text('deskripsi_penyakit');
            $table->text('solusi_penyakit');
            $table->unsignedBigInteger('kode_obat');
            $table->foreign('kode_obat')->references('id')->on('obats')->onDelete('cascade');
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
        Schema::dropIfExists('penyakits');
    }
};

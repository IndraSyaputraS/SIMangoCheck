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
        Schema::create('gejala_hasil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_id')->unsigned();
            $table->foreign('hasil_id')->references('id')->on('hasils')->onDelete('cascade');
            $table->unsignedBigInteger('gejala_id')->unsigned();
            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade');
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
        //
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfopembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infopembayarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('jenispembayaran_id');
            $table->foreign('jenispembayaran_id')->references('id')->on('jenispembayaran')->onDelete('cascade');
            $table->char('membayar');
            $table->char('penyetor');
            // $table->unsignedBigInteger('gambar_id');
            // $table->foreign('gambar_id')->references('keterangan')->on('gambars')->onDelete('cascade');
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
        Schema::dropIfExists('infopembayarans');
    }
}

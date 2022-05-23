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
        Schema::create('nikah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jemaat_id')->unsigned();
            $table->foreign('jemaat_id')->references('id')->on('jemaat')->onDelete('cascade')->onUpdate('cascade');
         //   $table->string('nama_nikah')->nullable();
         //   $table->string('alamat_nikah')->nullable();
            $table->string('nama_calon')->nullable();
            $table->string('alamat_calon')->nullable();

            $table->string('hari_nikah')->nullable();
            $table->string('menikah')->nullable();
            $table->date('tglnikah')->nullable();
            $table->string('waktu')->nullable();
           // $table->string('tempat')->nullable();
            $table->string('pendeta')->nullable();
        
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
        Schema::dropIfExists('nikah');
    }
};

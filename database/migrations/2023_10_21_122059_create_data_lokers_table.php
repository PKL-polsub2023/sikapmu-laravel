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
        Schema::create('data_lokers', function (Blueprint $table) {
            $table->id('id_loker');
            $table->string('judul')->nullable();
            $table->string('instansi')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('persyaratan')->nullable();
            $table->string('foto')->nullable();
            $table->string('waktu_mulai')->nullable();
            $table->string('waktu_akhir')->nullable();
            $table->string('up_dokumen')->nullable();
            $table->string('jumlah_pelamar')->nullable();
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
        Schema::dropIfExists('data_lokers');
    }
};

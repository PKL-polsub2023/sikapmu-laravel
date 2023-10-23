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
        Schema::create('wirausahas', function (Blueprint $table) {
            $table->id('id_wirausaha');
            $table->string('foto')->nullable();
            $table->string('ttl')->nullable();
            $table->integer('umur')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_wirausaha')->nullable();
            $table->bigInteger('id_user')->nullable();
            $table->bigInteger('id_data')->nullable();
            // $table->bigInteger('id_usaha')->nullable();
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
        Schema::dropIfExists('wirausahas');
    }
};

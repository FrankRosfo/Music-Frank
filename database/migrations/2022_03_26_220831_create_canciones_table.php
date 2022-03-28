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
        Schema::create('canciones', function (Blueprint $table) {
            $table->bigIncrements('id_cancion');
            $table->string('Nombre');
            $table->string('Artista');
            $table->string('Album');
            $table->string('Duracion');
            $table->string('URL');
            $table->string('Imagen');
            $table->string('Extension');
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
        Schema::dropIfExists('canciones');
    }
};

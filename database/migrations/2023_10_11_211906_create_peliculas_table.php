<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('foto')->nullable(); // Puedes ajustar el tipo de dato según tus necesidades.
            $table->unsignedBigInteger('id_genero');
            $table->foreign('id_genero')->references('id')->on('genero');
            $table->boolean('id_clasific');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
};
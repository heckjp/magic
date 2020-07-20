<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->integer('ano');
            $table->string('sinopse');
            $table->unsignedBigInteger('classificacaos_id');
            $table->unsignedBigInteger('diretors_id');
            $table->foreignId('classificacaos_id')->constrained('classificacaos')->onDelete('cascade');
            $table->foreignId('diretors_id')->constrained('diretors')->onDelete('cascade');
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
        Schema::dropIfExists('filmes');
    }
}

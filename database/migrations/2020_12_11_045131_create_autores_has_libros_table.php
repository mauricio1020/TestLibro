<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoresHasLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores_has_libros', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('autores_id')->unsigned();
            $table->bigInteger('libros_isbn')->unsigned();

            $table->foreign('autores_id')->references('id')->on('autores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('libros_isbn')->references('id')->on('libros')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('autores_has_libros');
    }
}

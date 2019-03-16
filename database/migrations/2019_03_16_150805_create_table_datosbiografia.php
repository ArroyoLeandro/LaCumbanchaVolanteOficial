<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDatosbiografia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::defaultStringLength(1000);
            Schema::create('datosbiografia', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titulo');
                $table->string('descripcion');
                $table->string('desCorta')->nullable();
                $table->string('Imagen')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datosbiografia');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProximasfechas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::defaultStringLength(1000);
        Schema::create('ProximasFechas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dia');
            $table->string('mes');
            $table->string('nombre');
            $table->string('lugar');
            $table->string('hora');
            $table->string('link');
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
        Schema::dropIfExists('ProximasFechas');
    }
}

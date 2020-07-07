<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadesTable extends Migration
{
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ciudades');
    }
}

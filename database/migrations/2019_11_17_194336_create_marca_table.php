<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaTable extends Migration
{
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('marca');
    }
}

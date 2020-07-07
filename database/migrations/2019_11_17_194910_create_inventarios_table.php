<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ip')->nullable();
            $table->integer('puerta_enlace')->nullable();
            $table->string('nombre_equipo',50)->nullable();
            $table->string('serial_cpu',50)->nullable();
            $table->string('serial_teclado',50)->nullable();
            $table->string('serial_monitor',50)->nullable();
            $table->unsignedBigInteger('marca_teclado');
            $table->foreign('marca_teclado')->references('id')->on('marcas');
            $table->unsignedBigInteger('marca_monitor');
            $table->foreign('marca_monitor')->references('id')->on('marcas');
            $table->unsignedBigInteger('marca_cpu');
            $table->foreign('marca_cpu')->references('id')->on('marcas');
            $table->unsignedBigInteger('marca_mouse');
            $table->foreign('marca_mouse')->references('id')->on('marcas');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->unsignedBigInteger('sistema_operativo_id');
            $table->foreign('sistema_operativo_id')->references('id')->on('sistemas_operativos');
            $table->unsignedBigInteger('ram_id');
            $table->foreign('ram_id')->references('id')->on('rams');
            $table->unsignedBigInteger('procesador_id');
            $table->foreign('procesador_id')->references('id')->on('procesadores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('inventarios');
    }
}

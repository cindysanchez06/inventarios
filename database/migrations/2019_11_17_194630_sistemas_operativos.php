<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SistemasOperativos extends Migration
{
    public function up()
    {
        Schema::create('sistemas_operativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('sistemas_operativos');
    }
}

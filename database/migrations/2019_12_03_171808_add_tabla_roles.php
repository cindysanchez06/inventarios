<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablaRoles extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50)->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('rol_id')->nullable(false);
            $table->foreign('rol_id')->references('id')->on('roles');
        });
    }
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rol_id');
            $table->dropForeign('alianza_institucion_origen_convenio_id_foreign');
        });
        Schema::drop('roles');
    }
}

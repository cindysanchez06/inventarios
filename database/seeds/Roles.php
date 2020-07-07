<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    public function run()
    {
        $hoy = date("Y-m-d H:i:s");
        \DB::table('roles')->insert(array(
            0  => array(
                'nombre'     => 'Administrador',
                'created_at' => $hoy,
                'updated_at' => $hoy,
            ),
            1  => array(
                'nombre'     => 'Asistente',
                'created_at' => $hoy,
                'updated_at' => $hoy,
            ),
        ));
    }
}

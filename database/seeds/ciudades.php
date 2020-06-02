<?php

use Illuminate\Database\Seeder;

class ciudades extends Seeder
{
    public function run()
    {
        DB::table('ciudades')->insert(array(
            0  => array(
                'id'         => 1,
                'nombre'     => 'Bogotá',
                'created_at' => null,
                'updated_at' => null,
            ),
            1  => array(
                'id'         => 2,
                'nombre'     => 'Medellin',
                'created_at' => null,
                'updated_at' => null,
            ),
            2  => array(
                'id'         => 3,
                'nombre'     => 'Cali',
                'created_at' => null,
                'updated_at' => null,
            ),
            3  => array(
                'id'         => 4,
                'nombre'     => 'Barranquilla',
                'created_at' => null,
                'updated_at' => null,
            ),
            4  => array(
                'id'         => 5,
                'nombre'     => 'Cartagena',
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }
}

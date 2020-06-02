<?php

use Illuminate\Database\Seeder;

class marca extends Seeder
{
    public function run()
    {
        \DB::table('marcas')->insert(array(
            0  => array(
                'id'         => 1,
                'nombre'     => 'Hp',
                'created_at' => null,
                'updated_at' => null,
            ),
            1  => array(
                'id'         => 2,
                'nombre'     => 'Lenovo',
                'created_at' => null,
                'updated_at' => null,
            ),
            2  => array(
                'id'         => 3,
                'nombre'     => 'Dell',
                'created_at' => null,
                'updated_at' => null,
            ),
            3  => array(
                'id'         => 4,
                'nombre'     => 'Omega',
                'created_at' => null,
                'updated_at' => null,
            ),
            4  => array(
                'id'         => 5,
                'nombre'     => 'Acer',
                'created_at' => null,
                'updated_at' => null,
            ),
            5  => array(
                'id'         => 6,
                'nombre'     => 'Samsung',
                'created_at' => null,
                'updated_at' => null,
            ),
            6  => array(
                'id'         => 7,
                'nombre'     => 'Toshiba',
                'created_at' => null,
                'updated_at' => null,
            ),
            7  => array(
                'id'         => 8,
                'nombre'     => 'Asus',
                'created_at' => null,
                'updated_at' => null,
            ),
            8  => array(
                'id'         => 9,
                'nombre'     => 'Lg',
                'created_at' => null,
                'updated_at' => null,
            ),
            9  => array(
                'id'         => 10,
                'nombre'     => 'Ibm',
                'created_at' => null,
                'updated_at' => null,
            ),
            10  => array(
                'id'         => 11,
                'nombre'     => 'Vaio',
                'created_at' => null,
                'updated_at' => null,
            ),
        ));

    }
}

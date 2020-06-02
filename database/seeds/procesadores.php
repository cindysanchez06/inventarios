<?php

use Illuminate\Database\Seeder;

class procesadores extends Seeder
{

    public function run()
    {
        \DB::table('procesadores')->insert(array(
            0  => array(
                'id'         => 1,
                'nombre'     => 'Intel Core i3',
                'created_at' => null,
                'updated_at' => null,
            ),
            1  => array(
                'id'         => 2,
                'nombre'     => 'Intel Core i7',
                'created_at' => null,
                'updated_at' => null,
            ),
            2  => array(
                'id'         => 3,
                'nombre'     => 'Intel Core 2 Quad',
                'created_at' => null,
                'updated_at' => null,
            ),
            3  => array(
                'id'         => 4,
                'nombre'     => 'Intel Core 2 Duo',
                'created_at' => null,
                'updated_at' => null,
            ),
            4  => array(
                'id'         => 5,
                'nombre'     => 'Intel Core i5',
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }
}

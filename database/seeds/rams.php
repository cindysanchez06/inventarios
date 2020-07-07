<?php

use Illuminate\Database\Seeder;

class rams extends Seeder
{
    public function run()
    {
        \DB::table('rams')->insert(array(
            0  => array(
                'id'         => 1,
                'nombre'     => '1GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            1  => array(
                'id'         => 2,
                'nombre'     => '2GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            2  => array(
                'id'         => 3,
                'nombre'     => '3GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            3  => array(
                'id'         => 4,
                'nombre'     => '5GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            4  => array(
                'id'         => 5,
                'nombre'     => '5GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            5  => array(
                'id'         => 6,
                'nombre'     => '6GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            6  => array(
                'id'         => 7,
                'nombre'     => '7GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            7  => array(
                'id'         => 8,
                'nombre'     => '8GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            8  => array(
                'id'         => 9,
                'nombre'     => '9GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            9  => array(
                'id'         => 10,
                'nombre'     => '10GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            10  => array(
                'id'         => 11,
                'nombre'     => '11GB',
                'created_at' => null,
                'updated_at' => null,
            ),
            11  => array(
                'id'         => 12,
                'nombre'     => '12GB',
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }
}

<?php

use Illuminate\Database\Seeder;

class sistemas_operativos extends Seeder
{
    public function run()
    {
        DB::table('sistemas_operativos')->insert(array(
            0  => array(
                'id'         => 1,
                'nombre'     => 'Windows 7',
                'created_at' => null,
                'updated_at' => null,
            ),
            1  => array(
                'id'         => 2,
                'nombre'     => 'Windows 10',
                'created_at' => null,
                'updated_at' => null,
            ),
            2  => array(
                'id'         => 3,
                'nombre'     => 'Windows XP',
                'created_at' => null,
                'updated_at' => null,
            ),
            3  => array(
                'id'         => 4,
                'nombre'     => 'Windows 8',
                'created_at' => null,
                'updated_at' => null,
            ),
            4  => array(
                'id'         => 5,
                'nombre'     => 'linux',
                'created_at' => null,
                'updated_at' => null,
            ),
            5  => array(
                'id'         => 6,
                'nombre'     => 'ios',
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }

}

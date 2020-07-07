<?php
use Illuminate\Database\Seeder;

class Ciudades extends Seeder
{
    public function run()
    {
        $hoy = date("Y-m-d H:i:s");
        \DB::table('ciudades')->insert(array(
            0  => array(
                'nombre'     => 'Bogotá',
                'created_at' => $hoy,
                'updated_at' => $hoy,
            ),
            1  => array(
                'nombre'     => 'Medellin',
                'created_at' => $hoy,
                'updated_at' => $hoy,
            ),
            2  => array(
                'nombre'     => 'Cali',
                'created_at' => $hoy,
                'updated_at' => $hoy,
            ),
            3  => array(
                'nombre'     => 'Barranquilla',
                'created_at' => $hoy,
                'updated_at' => $hoy,
            ),
            4  => array(
                'nombre'     => 'Cartagena',
                'created_at' => $hoy,
                'updated_at' => $hoy,
            ),
        ));
    }
}

<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    public function run()
    {
        $hoy = date("Y-m-d H:i:s");
        \DB::table('users')->insert([
            'name' => 'Cindy Sanchez',
            'email' =>'cindyk_98@hotmail.com',
            'password' => bcrypt(123456),
            'created_at' => $hoy,
            'updated_at' => $hoy,
            'rol_id' => 1
        ]);
    }
}

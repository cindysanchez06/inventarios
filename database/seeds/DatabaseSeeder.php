<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(Roles::class);
        $this->call(user::class);
        $this->call(Ciudades::class);
        $this->call(procesadores::class);
        $this->call(marca::class);
        $this->call(rams::class);
        $this->call(sistemas_operativos::class);
        
    }
}

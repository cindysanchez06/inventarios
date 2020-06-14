<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventarios';
    protected $fillable = ['ip','puerta_enlace','nombre_equipo','serial_cpu','serial_monitor','serial_teclado','marca_teclado','marca_monitor','marca_cpu','marca_mouse','sistema_operativo_id','ram_id','procesador_id','usuario_id'];
    protected $guarded = ['id'];
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ip' => 'required|numeric',
            'puerta_enlace' => 'required|numeric',
            'nombre_equipo' => 'required',
            'serial_teclado' => 'required',
            'serial_monitor' => 'required',
            'serial_cpu' => 'required',
            'marca_teclado' => 'required',
            'marca_monitor' => 'required',
            'marca_mouse' => 'required',
            'marca_cpu' => 'required',
            'procesador_id' => 'required',
            'marca_mouse' => 'required',
            'sistema_operativo_id' => 'required',
            'ram_id' => 'required',
            //'usuario_id' => 'required'
        ];
    }
}

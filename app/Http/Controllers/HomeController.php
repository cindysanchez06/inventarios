<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
        $total = \DB::table('inventarios')->select('inventarios.*')->get();
        $inventario = \DB::table('inventarios')->select('inventarios.*','marcas.nombre AS marca','marca_cpu.nombre as marca_cpu','marca_monitor.nombre as marca_monitor','marca_mouse.nombre as marca_mouse','procesadores.nombre AS procesador','sistemas_operativos.nombre AS sistemao','rams.nombre AS ram')
                ->join('marcas','inventarios.marca_teclado','=','marcas.id')
                ->join('marcas as marca_cpu','inventarios.marca_cpu','=','marca_cpu.id')
                ->join('marcas as marca_monitor','inventarios.marca_monitor','=','marca_monitor.id')
                ->join('marcas as marca_mouse','inventarios.marca_mouse','=','marca_mouse.id')
                ->join('procesadores','inventarios.procesador_id','=','procesadores.id')
                ->join('sistemas_operativos','inventarios.sistema_operativo_id','=','sistemas_operativos.id')
                ->join('rams','inventarios.ram_id','=','rams.id')
                ->paginate(50);
        return view('home',compact('total','inventario'));
    }
}

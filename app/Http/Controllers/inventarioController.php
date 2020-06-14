<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InventarioRequest;
use App\Models\Inventario;
use Session;


class inventarioController extends Controller
{
    public function create()
    {
        $marca = \DB::table('marcas')->pluck('nombre','id');
        $procesador = \DB::table('procesadores')->pluck('nombre','id');
        $sistemao = \DB::table('sistemas_operativos')->pluck('nombre','id');
        $ram = \DB::table('rams')->pluck('nombre','id');
        return \View::make('inventario/create',compact('marca','procesador','sistemao','ram'));
    }
    
    public function store(InventarioRequest $request)
    {
        $input = $request->all();
        $input['usuario_id'] = auth()->id();
        $create = Inventario::create($input);
        Session::flash('message','Inventario registrado');
        return redirect('home');    
    }
}
    
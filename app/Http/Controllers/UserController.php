<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::select('users.*','roles.nombre as rol')->join('roles','roles.id','users.rol_id')->get();
        return \View::make('usuario/list',compact('usuarios'));
    }
    public function create()
    {
        $roles = \DB::table('roles')->pluck('nombre','id');
        return \View::make('usuario/crearUsuario',compact('roles'));
    }
    public function store(UserRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $create = User::create($input);
        Session::flash('message','Usuario registrado');
        return redirect('usuario');    
    }
    public function edit($id)
    {
        $usuario = User::find($id);
        $roles = \DB::table('roles')->pluck('nombre','id');
        return \View::make('usuario/actualizarUsuario',compact('usuario','roles'));
    }
    public function update(UserRequest $request, $id)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $inventario = User::find($request->id)->update($input);
        Session::flash('message','Usuario Actualizado Correctamente');
        return redirect('usuario');
    }
}

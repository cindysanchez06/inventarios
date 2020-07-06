@extends('layouts.app')

@section('content')

<h1>Lista Usuarios</h1>

	<div class="form-inline">
		<div class="form-group ">
			<a href="{{ route('usuario.index') }}" class="btn btn-warning">Todo</a>
			<a href="{{ route('usuario.create') }}" class="btn btn-success">Crear</a>
		</div>
		<div class="form-group" style="float: right;">
			
		</div>			
	</div>
	<hr>
	<!--ponemos un mensaje de registro exitoso(este mensaje esta definido en el InventarioController)-->
	@if(Session::has('message'))
	    <div class="alert alert-success alert-dismissible" role="alert">
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{Session::get('message')}}
	    </div>
	@endif

	<div class="table-responsive">
		<table class="table table-condensed table-striped table-bordered">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Rol</th>
				<th>Funciones</th>
			</tr>
			<tbody class="buscar">
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
						<td>{{ $usuario->rol }}</td>
						<td class="form-inline">
							<div class="form-group">
								<a class="btn btn-success btn-xs " href="{{ route('usuario.edit',['id' => $usuario->id]) }}"><span><i class="glyphicon glyphicon-edit"></i></span> Editar</a>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

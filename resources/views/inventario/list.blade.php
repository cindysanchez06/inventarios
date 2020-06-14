@extends('layouts.app')

@section('content')

<h1>Lista Inventario</h1>

	<div class="form-inline">
		<div class="form-group ">
			<label>Buscar</label>
			<input type="text" class="form-control" name="nombre_cliente" id="search" placeholder="Filtro automatico">
		</div>
		<div class="form-group ">
			<a href="{{ route('home') }}" class="btn btn-warning">Todo</a>
		</div>
		<div class="form-group" style="float: right;">
            <a href="{{ route('inventario.create') }}" class="btn btn-success">Crear</a>
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
				<th>IP</th>
				<th>Nombre Equipo</th>
				<th>Serial CPU</th>
				<th>Funciones</th>
			</tr>
			<tbody class="buscar">
				@foreach($total as $inventarios)
					<tr>
						<td>{{ $inventarios->id }}</td>
						<td>{{ $inventarios->ip }}</td>
						<td>{{ $inventarios->nombre_equipo }}</td>
						<td>{{ $inventarios->serial_cpu }}</td>
						<td class="form-inline">
							<div class="form-group">
								<a class="btn btn-warning btn-xs btn-block" href="#" data-toggle="modal" data-target="#invent{{$inventarios->id}}" aria-hidden="true"><span><i class="glyphicon glyphicon-eye-open"></i></span> Ver Inventario Completo</a>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@foreach($inventario as $inventarios)
		@include('inventario/modal')
	@endforeach
@endsection

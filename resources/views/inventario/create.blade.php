<!--este formuario se extendera del app-->
@extends('layouts.app')
<!--y estara en la seccion de content-->
@section('content')
<center><h2>Registrar Inventario</h2></center>
<hr>
<!--pondremos un mensaje de error por si hubo algun inconveniente diligenciando algun formulario(estos mensajes estan definidos en InventarioRequest)-->
		@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
<!--accedemos a la ruta que va al metodo que usaremos para que nuestro boton ejecute la accion para crear-->
{!! Form::open(['route' => 'inventario.store', 'method' => 'post','class' => 'contact_form' ]) !!}
	<!--creamos nuestro formulario con los inputs que necesitamos-->
	<input type="hidden" name="token" id="token" value="{{ csrf_token() }}" />
			<div class="col-xs-4">
				<div class="form-group">
					{!! Form::label('IP','IP') !!}
					{!! Form::text('ip',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('puerta_enlace','Puerta de enlace') !!}
					{!! Form::text('puerta_enlace',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div><div class="form-group">
					{!! Form::label('Nombre Equipo','Nombre Equipo') !!}
					{!! Form::text('nombre_equipo',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('Serial Teclado','Serial Teclado') !!}
					{!! Form::text('serial_teclado',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('Serial Monitor','Serial Monitor') !!}
					{!! Form::text('serial_monitor',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group">
					{!! Form::label('Serial cpu','Serial CPU') !!}
					{!! Form::text('serial_cpu',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div>
				<div class="form-group">
					<label >Marca Teclado</label>
					{{ Form::select('marca_teclado', $marca, old('marca_teclado'), ['class' => 'form-control input-md', 'target' => '', 'url' => '', 'title' => 'Seleccione la marca del teclado', 'placeholder'=>'Seleccione la marca del teclado', 'data-toggle'=> 'tooltip' ]) }}
				</div>
				<div class="form-group">
					<label >Marca Monitor</label>
					{{ Form::select('marca_monitor', $marca, old('marca_monitor'), ['class' => 'form-control input-md', 'target' => '', 'url' => '', 'title' =>'Seleccione la marca del monitor','placeholder'=>'Seleccione la marca del monitor', 'data-toggle'=> 'tooltip' ]) }}

				</div>
				<div class="form-group">
					<label >Marca CPU</label>
					{{ Form::select('marca_cpu', $marca, old('marca_cpu'), ['class' => 'form-control input-md', 'target' => '', 'url' => '', 'title' =>'Seleccione la marca de la CPU','placeholder'=>'Seleccione la marca de la CPU','data-toggle'=> 'tooltip' ]) }}
				</div>
				<div class="form-group">
					<label >Procesador</label>
					{{ Form::select('procesador_id', $procesador, old('procesador_id'), ['class' => 'form-control input-md', 'target' => '', 'url' => '', 'title' => 'Seleccione el procesador', 'placeholder'=>'Seleccione el procesador', 'data-toggle'=> 'tooltip' ]) }}
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group">
					<label >Sistema Operativo</label>
					{{ Form::select('sistema_operativo_id', $sistemao, old('sistema_operativo_id'), ['class' => 'form-control input-md', 'target' => '', 'url' => '', 'title' => 'Seleccione el sistema operativo', 'placeholder'=>'Seleccione el sistema operativo',  'data-toggle'=> 'tooltip' ]) }}
				</div>
				<div class="form-group">
					<label >Ram</label>
					{{ Form::select('ram_id', $ram, old('ram_id'), ['class' => 'form-control input-md', 'target' => '', 'url' => '', 'title' => 'Seleccione la RAM', 'placeholder'=>'Seleccione la RAM',  'data-toggle'=> 'tooltip' ]) }}
				</div>
				<div class="form-group">
					<label >Marca Mouse</label>
					{{ Form::select('marca_mouse', $marca, old('marca_mouse'), ['class' => 'form-control input-md', 'target' => '', 'url' => '', 'title' => 'Seleccione la marca del mouse', 'placeholder'=>'Seleccione la marca del mouse',  'data-toggle'=> 'tooltip' ]) }}
				</div>

				<div class="form-group pull-right">
					{!! Form::submit('Registrar' , ['class' => 'btn btn-success  btn-lg' ]) !!}
				</div>
			</div>
				<!--cerramos el formulario-->
			{!! Form::close() !!}
@endsection

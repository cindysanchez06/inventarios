@extends('layouts.app')
@section('content')
<h1>Actualizar Usuario</h1>			
<hr>
		@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif	
{!! Form::model($usuario,['route' => 'usuario/update', 'method' => 'put','class'=>'contact_form']) !!}
	{!! Form::hidden('id', $usuario->id) !!}
		<div class="col-xs-6">
				<div class="form-group">
					{!! Form::label('name','Nombre') !!}
					{!! Form::text('name',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('email','Correo') !!}
					{!! Form::text('email',null, ['class' => 'form-control'  ,'required' => 'required']) !!}
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					{!! Form::label('password','Contraseña') !!}
					{!! Form::password('password',null, ['class' => 'form-control','required' => 'required', 'id'=>'password']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('rol_id','Seleccione el rol') !!}
					{{ Form::select('rol_id', $roles, old('rol_id'), ['class' => 'form-control input-md','title' => 'Seleccione el rol', 'placeholder'=>'Seleccione el rol', 'data-toggle'=> 'tooltip' ]) }}
				</div>
			</div>
			<div class="form-group text-center">
				{!! Form::submit('Actualizar' , ['class' => 'btn btn-success btn-lg' ,'id' => 'btncliente']) !!}
			</div>
			<script type="text/javascript">
				$('#password').addClass('form-control');
			</script>
		<!--cerramos el formulario-->	
	{!! Form::close() !!}
@endsection
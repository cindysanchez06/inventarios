<!--este formuario se extendera del app-->
@extends('layouts.app')
<!--y estara en la seccion de content-->
@section('content')
<center><h2>Registrar Usuario</h2></center>
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
{!! Form::open(['route' => 'usuario.store', 'method' => 'post','class' => 'contact_form' ]) !!}
	<!--creamos nuestro formulario con los inputs que necesitamos-->
	<input type="hidden" name="token" id="token" value="{{ csrf_token() }}" />
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
					{!! Form::password('password',null, ['class' => 'form-control','required' => 'required','id'=>'password']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('rol_id','Seleccione el rol') !!}
					{{ Form::select('rol_id', $roles, old('rol_id'), ['class' => 'form-control input-md','title' => 'Seleccione el rol', 'placeholder'=>'Seleccione el rol', 'data-toggle'=> 'tooltip' ]) }}
				</div>
				<div class="form-group pull-right">
					{!! Form::submit('Registrar' , ['class' => 'btn btn-success  btn-lg' ]) !!}
				</div>
			</div>
				<!--cerramos el formulario-->
			{!! Form::close() !!}
			<script type="text/javascript">
				$('#password').addClass('form-control');
			</script>
@endsection

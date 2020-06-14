<div id="invent{{$inventarios->id}}" class="modal fade  " tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg " role="document"> 
    	<div class="modal-content ">
    		<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h2 class=" text-center" style="text-transform:uppercase;">INVENTARIO DEL EQUIPO ({{$inventarios->nombre_equipo}})</h2>
          	</div> 
      		<div class="modal-body ">
	      		<div class="row">
							{!! Form::text('id', $inventarios->id,['class' => 'form-control','disabled']) !!}

	      			<div class="col-md-4">
		      			<div class="form-group">
		      				{!! Form::label('IP','IP') !!}
							{!! Form::text('id', $inventarios->ip,['class' => 'form-control','disabled']) !!}
		      			</div>
		      			<div class="form-group">
		      				{!! Form::label('Puerta enlace','Puerta enlace') !!}
							{!! Form::text('id', $inventarios->puerta_enlace,['class' => 'form-control','disabled']) !!}
		      			</div>
		      			<div class="form-group">
		      				{!! Form::label('Nombre Equipo','Nombre Equipo') !!}
							{!! Form::text('id', $inventarios->nombre_equipo,['class' => 'form-control','disabled']) !!}
		      			</div> 
		      			<div class="form-group">
		      				{!! Form::label('Serial Teclado','Serial Teclado') !!}
							{!! Form::text('id', $inventarios->serial_teclado,['class' => 'form-control','disabled']) !!}
		      			</div> 
		      			<div class="form-group">
		      				{!! Form::label('Serial Monitor','Serial Monitor') !!}
							{!! Form::text('id', $inventarios->serial_monitor,['class' => 'form-control','disabled']) !!}
		      			</div>
	      			</div>
	      			<div class="col-md-4">
		      			<div class="form-group">
		      				{!! Form::label('Serial cpu','Serial cpu') !!}
							{!! Form::text('id', $inventarios->serial_cpu,['class' => 'form-control','disabled']) !!}
		      			</div>
	      				<div class="form-group">
	      					<label >Marca Teclado</label>
							{!! Form::text('id', $inventarios->marca_teclado,['class' => 'form-control','disabled']) !!}
		      			</div>
		      			<div class="form-group">
		      				<label >Marca Monitor</label>
							{!! Form::text('id', $inventarios->marca_monitor,['class' => 'form-control','disabled']) !!}
		      			</div> 
		      			<div class="form-group">
		      				<label >Marca CPU</label>	
							{!! Form::text('id', $inventarios->marca_cpu,['class' => 'form-control','disabled']) !!}
		      			</div> 
		      			
	      			</div>
	      			<div class="col-md-4">
	      				<div class="form-group">
		      				<label >Procesador</label>
							{!! Form::text('id', $inventarios->procesador,['class' => 'form-control','disabled']) !!}
		      			</div> 
	      				<div class="form-group">
		      				<label >Sistema Operativo</label>
							{!! Form::text('id', $inventarios->sistemao,['class' => 'form-control','disabled']) !!}
		      			</div> 
		      			<div class="form-group">
		      				<label >Ram</label>
							{!! Form::text('id', $inventarios->ram,['class' => 'form-control','disabled']) !!}
		      			</div> 
		      			<div class="form-group">
		      				<label >Marca Mouse</label>	
							{!! Form::text('id', $inventarios->marca_mouse,['class' => 'form-control','disabled']) !!}
		      			</div> 
	      			</div> 
	      		</div>
    		</div> 
  		</div> 
	</div>
</div>

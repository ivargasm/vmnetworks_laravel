@extends('layouts.principal')
@section('content')
	@section('menu')
		<section class="servises">
			@parent
			<section class="contacto">
				<div class="vmnetworks">
					VMNetworks
				</div>
				<div class="datosformulario">
					<div class="row">
						@include('alerts.alerts')
						@include('alerts.success')
						{!!Form::open(['route' => 'email.store','method'=>'POST','class'=>'col l8 m7 s12 formulario'])!!}
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">account_circle</i>
									{!!Form::text('nombre',null,['class'=>'validate nombre','id'=>'nombre icon_prefix'])!!}
									{!!Form::label('icon_prefix','Nombre')!!}
								</div>
							</div>

							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">phonee</i>
									{!!Form::tel('telefono',null,['class'=>'validate','id'=>'telefono icon_telephone'])!!}
									{!!Form::label('icon_telephone','Telefono')!!}
								</div>
							</div>

							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">email</i>
									{!!Form::text('correo',null,['class'=>'validate','id'=>'mail icon_mail'])!!}
									{!!Form::label('icon_email','Correo')!!}
								</div>
							</div>

							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">mode_edit</i>
									{!!Form::textarea('mensaje',null,['class'=>'materialize-textarea','id'=>'icon_mensaje'])!!}
									{!!Form::label('icon_mensaje','Mensaje')!!}
								</div>
							</div>

							{!!Form::submit('Enviar',['class'=>'enviar btn', 'id'=>'envia-datos'])!!}
						{!!Form::close()!!}
					    <div class="row">
					    	<div class="col l4 m5 s12">
					    		<div class="datos card-panel teal">
					    			<p class="ubicados">Estamos Ubicado en Quererato, Queretaro</p>
					    			<p>Telefono:</p>
					    			<p>442 181 68 60 <br>448 169 57 96</p>
					    			<p>Correo:</p>
					    			<p>
					    				<a href="mailto:ismael.vargas@vmnetworks.com.mx">ismael.vargas@vmnetworks.com.mx</a><br>
					    				<a href="mailto:janet.soria@vmnetworks.com.mx">janet.soria@vmnetworks.com.mx</a>
					    			</p>
					    			<ul>
					    				<li>Mantenimiento preventivo y correctivo</li>
					    				<li>Eliminacion de virus</li>
					    				<li>Formateos</li>
					    				<li>respaldo de informacion</li>
					    				<li>Etc..</li>
					    			</ul>
					    		</div>
					    	</div>
					    </div>
					</div>
				</div>
			</section>
		</section>
	@endsection
@endsection
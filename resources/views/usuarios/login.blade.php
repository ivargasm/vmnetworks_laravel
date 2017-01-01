@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="login grey lighten-4">
				@parent
				<div class="formularioLogin">
					@include('alerts.errors')
					@include('alerts.alerts')
					<div class="card-panel white">
						<h4>Inicia Sesion</h4>
						<div class="row">
							{{Form::open(['route'=>'log.store', 'method'=>'POST'])}}
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">account_circle</i>
										{!!Form::text('email',null,['class'=>'validate','id'=>'icon_usuario'])!!}
										{!!Form::label('icon_usuario','Usuario')!!}
									</div>
									<div class="input-field col s12">
										<i class="material-icons prefix">vpn_key</i>
										{!!Form::password('password',['class'=>'validate contraseña','id'=>'icon_psw'])!!}
      									{!!Form::label('icon_psw','Contraseña')!!}
									</div>
									<div class="input-field col s3">
										{!!Form::submit('Ingresar',['class'=>'enviar btn'])!!}
									</div>
								</div>
								<div class="recupera_psw"><a href="{{URL::to('/password/reset')}}">Recuperar contraseña</a></div>
							{{Form::close()}}
						</div>
					</div>
				</div>
			</section>
		@endsection
	@endsection
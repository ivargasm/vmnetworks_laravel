@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="gery lighten-4">
				@parent
				<div class="formularioLogin">
					<div class="card-panel withe">
						<h4>Incia Sesion</h4>
						<div class="row">
							@include('alerts.alerts')
							{!!Form::open(['route' => 'usuarios.store', 'method' => 'POST', 'files' => true, 'class' => 'col s12'])!!}
								@include('usuarios.forms.form')
							{!!Form::close()!!}
						</div>
					</div>
				</div>
			</section>
		@endsection
	@endsection
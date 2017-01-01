@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="gery lighten-4">
				@parent
				@if(Auth::user()->id == $id && Auth::user()->perfil_id == 1)
					<div class="formularioLogin">
						<div class="card-panel withe">
							<h4>Incia Sesion</h4>
							<div class="row">
								@include('alerts.alerts')
								{!!Form::model($user,['route'=>['usuarios.update',$user->id], 'method' => 'PUT', 'files' => true, 'class' => 'col s12'])!!}
									@include('usuarios.forms.form')
								{!!Form::close()!!}
							</div>
						</div>
					</div>
				@else
					@include('errors.405')
				@endif
			</section>
		@endsection
	@endsection
@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="blog">
				@parent
				<div class="posts card white row">
					<div class="post col s12">
						<article>
							@include('alerts.alerts')
							<p class="titulo">Nuevo Tip</p>
							{!!Form::open(['route'=>'tips.store', 'files' => true, 'class'=>'formulario_post', 'method'=>'POST'])!!}
								@include('Tips.forms.form')

								{!!Form::submit('Subir Video',['class'=>'btn'])!!}
							{!!Form::close()!!}
						</article>
					</div>
				</div>
			</section>
		@endsection
	@endsection
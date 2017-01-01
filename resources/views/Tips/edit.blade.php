@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="blog">
				@parent
				<div class="posts card white row">
					<div class="post col s12">
						<article>
							@include('alerts.alerts')
							<p class="titulo">Actualizar Tip</p>
							{!!Form::model($tip,['route'=>['tips.update',$tip->id], 'files' => true, 'class'=>'formulario_post', 'method'=>'PUT'])!!}
								@include('tips.forms.form')

								{!!Form::submit('Actualizar Tip',['class'=>'btn'])!!}
							{!!Form::close()!!}
						</article>
					</div>
				</div>
			</section>
		@endsection
	@endsection
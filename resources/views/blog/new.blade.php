@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="blog">
				@parent
				<div class="posts card white row">
					<div class="post col s12">
						<article>
							@include('alerts.alerts')
							<p class="titulo">Nuevo Articulo</p>
							{!!Form::open(['route'=>'blog.store', 'files' => true, 'class'=>'formulario_post', 'method'=>'POST'])!!}
								@include('blog.forms.form')

								{!!Form::submit('Crear Articulo',['class'=>'btn'])!!}
							{!!Form::close()!!}
						</article>
					</div>
				</div>
			</section>
		@endsection
	@endsection
@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="blog">
				@parent
				<div class="posts card white row">
					<div class="post col s12">
						<article>
							<p class="titulo">Nuevo Articulo</p>
							{!!Form::model($blog,['route'=>['blog.update',$blog->id], 'files' => true, 'class'=>'formulario_post', 'method'=>'PUT'])!!}
								@include('blog.forms.form')

								{!!Form::submit('Actualizar Articulo',['class'=>'btn'])!!}
							{!!Form::close()!!}
						</article>
					</div>
				</div>
			</section>
		@endsection
	@endsection
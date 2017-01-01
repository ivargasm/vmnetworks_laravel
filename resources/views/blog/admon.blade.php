@extends('layouts.principal')
	@section('content')
		@section('menu')
			<div class="blog">
				@parent
				<div class="titulo_panel card">
					<p>Panel de control</p>
					<p>{!!Auth::user()->name!!}</p>
					<div class="botones">
						<a href="{{URL::action('BlogController@newArticle')}}" class="btn grey darken-2">Nuevo Post</a>
						<a href="{{URL::action('LoginController@logout')}}" class="btn grey darken-2">Cerrar Session</a>
					</div>
				</div>
				@foreach($articulos as $articulo)
					<div class="posts card white row">
						<div class="post col s12">
							<article>
								<p class="titulo">{{$articulo->id}} .- {{$articulo->titulo}}</p>
								<div class="acciones">
									<a href="{{URL::to('/blog/'.$articulo->id.'/edit')}}">Editar</a>
									<a href="{{URL::to(action('BlogController@show', ['id' => $articulo->id]))}}">Ver</a>
									{!!Form::open(['route'=>['blog.destroy',$articulo->id],'method'=>'DELETE'])!!}
										{!!Form::submit('Eliminar')!!}
									{!!Form::close()!!}
								</div>
							</article>
						</div>
					</div>
				@endforeach
				{!!$articulos->render()!!}
			</div>
		@endsection
	@endsection
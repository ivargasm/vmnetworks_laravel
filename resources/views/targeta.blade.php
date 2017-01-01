@extends('layouts.principal')
@section('content')
	@section('menu')
		@parent
		<div class="contenedor" id="contenedor">
			<section class="tarjeta">
				<div class="slider_banner">
					<div class="banner" id="banner">
						{{Html::image('imgs/tarjeta/banner.jpg','Fondo Baner', array('class'=>'slide active'))}}
						<div class="foto">
							{{Html::image('imgs/admin/'.$foto)}}
						</div>
					</div>
				</div>
				<div class="slider_info">
					<a href="" id="info-prev" class="flecha-info anterior"><span class="fa fa-chevron-left"></span></a>
					<a href="" id="info-next" class="flecha-info siguiente"><span class="fa fa-chevron-right"></span></a>
					<div id="informacion" class="informacion">
						<div id="info" class="info">
							<div class="slide active">
								<h2 class="nombre">{{$user->name}}</h2>
								<p class="trabajo">{{$user->ocupacion}}</p>
								<p class="pais">{{Html::image('imgs/tarjeta/bandera.png')}}{{$user->nacionalidad}}</p>
							</div>
							<div class="slide">
								<h2 class="subtitulo">Actividades</h2>
								<p class="texto">{!!$user->descripcion!!}</p>
							</div>
							<div class="slide">
								<h2 class="subtitulo">Quien soy.</h2>
								<p class="texto">{!!$user->descripcion2!!}</p>
							</div>
						</div>
						<div class="botones" id="botones">
						</div>
					</div>
				</div>
				<div class="redes-sociales">
					<!-- <a href="" class="bahance"><span class="fa fa-behance"></span></a> -->
					<a href="https://www.facebook.com/vmnetworks" class="facebook" target="_blank" rel="nofollow"><span class="fa fa-facebook"></span></a>
					<!-- <a href="" class="twitter"><span class="fa fa-twitter"></span></a> -->
					@if(Auth::user())
						@if(Auth::user()->id == $id)
							<a href="{{URL::to('/usuarios/'.$user->id.'/edit')}}" class="deep-orange darken-4"><span class="fa fa-pencil "></span></a>
						@endif
					@endif
				</div>
			</section>
		</div>
@endsection
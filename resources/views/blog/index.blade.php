@extends('layouts.principal')
	@section('content')
		@section('menu')
			<section class="blog">
				@parent
				<div class="vmnetworks">
					Blog VMNetworks
				</div>
				<div class="row">
					<aside class="col s12 hide-on-med-and-up">
						<div class="publicidad">
							<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvmnetworks&width=450&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width=100% height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							<br>
							<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvmnetworks%2Fvideos%2F520325518171870%2F&width=500&show_text=false&height=280&appId" width=100% height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
					</aside>
					<div class="col m8 s12">
						<div class="row vistas_blog">
							@foreach($articulos as $articulo)
								<div class="col m6 s12">
									<div class="posts_menu card white">
										<div class="post_menu">
											<article>
												<div class="thumb">
													<a href="{{URL::to(action('BlogController@show', ['id' => $articulo->id]))}}">
														<div class="imagen_fondo" style="background: url('http://localhost:8080/vmnetworks_laravel/public/imgs/blog/{{$articulo->imagen}}')"></div>
													</a>
												</div>
												<p class="titulo_menu_post"><a href="{{URL::to(action('BlogController@show', ['id' => $articulo->id]))}}">{{$articulo->titulo}}</a></p>
												<p class="estracto">{{$articulo->extracto}}</p>
											</article>
										</div>
									</div>
								</div>
							@endforeach
						</div>	
						{!!$articulos->render()!!}
					</div>
					<aside class="col s12 m4 hide-on-small-only">
						<div class="publicidad">
							<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvmnetworks&width=450&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width=100% height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							<br>
							<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvmnetworks%2Fvideos%2F520325518171870%2F&width=500&show_text=false&height=280&appId" width=100% height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
					</aside>
				</div>
			</section>
		@endsection
	@endsection
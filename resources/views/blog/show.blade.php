@extends('layouts.principal')
	@section('content')
		@section('menu')
		<section class="blog">
			@parent
			@foreach($articulo as $post)
			<div class="posts card white row">
				<div class="post col s12">
					<article>
						<p class="publico col s6 left-align">Autor: {{$post->name}}</p>
						<p class="fecha col s6 right-align">{{$post->fecha}}</p>
						<p class="titulo">{{$post->titulo}}</p>
						<div class="thumb">
							{{Html::image('imgs/blog/'.$post->imagen,'Blog',array('class'=>'responsive-img'))}}
						</div>
						<p class="articulo flow-text">{!!$post->articulo!!}</p>
					</article>

					@if(!empty($post->titulo2) and !empty($post->imagen2) and !empty($post->articulo2))
						<article>
							<p class="titulo2">{{$post->titulo2}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen2,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo2!!}</p>
						</article>
					@else
						<article class="hide">
							<p class="titulo2">{{$post->titulo2}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen2,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo2!!}</p>
						</article>
					@endif

					@if(!empty($post->titulo3) and !empty($post->imagen3) and !empty($post->articulo3))
						<article>
							<p class="titulo2">{{$post->titulo3}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen3,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo3!!}</p>
						</article>
					@else
						<article class="hide">
							<p class="titulo2">{{$post->titulo3}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen3,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo3!!}</p>
						</article>
					@endif

					@if(!empty($post->titulo4) and !empty($post->imagen4) and !empty($post->articulo4))
						<article>
							<p class="titulo2">{{$post->titulo4}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen4,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo4!!}</p>
						</article>
					@else
						<article class="hide">
							<p class="titulo2">{{$post->titulo4}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen4,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo4!!}</p>
						</article>
					@endif

					@if(!empty($post->titulo5) and !empty($post->imagen5) and !empty($post->articulo5))
						<article>
							<p class="titulo2">{{$post->titulo5}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen5,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo5!!}</p>
						</article>
					@else
						<article class="hide">
							<p class="titulo2">{{$post->titulo5}}</p>
							<div class="thumb">
								{{Html::image('imgs/blog/'.$post->imagen5,'Blog',array('class'=>'responsive-img'))}}
							</div>
							<p class="articulo flow-text">{!!$post->articulo5!!}</p>
						</article>
					@endif
				</div>
			</div>
			<div class="mensajes">
				<div id="disqus_thread"></div>
			</div>
			<script>
				/**
				 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
				
				var disqus_config = function () {
				    this.page.url = 'http://localhost:8080/vmnetworks_laravel/public/blog/{{$post->id}}';  // Replace PAGE_URL with your page's canonical URL variable
				    this.page.identifier = '{{$post->id}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				
				(function() { // DON'T EDIT BELOW THIS LINE
				    var d = document, s = d.createElement('script');
				    s.src = '//vmnetworks-com-mx.disqus.com/embed.js';
				    s.setAttribute('data-timestamp', +new Date());
				    (d.head || d.body).appendChild(s);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			@endforeach
		</section>
		@endsection
	@endsection
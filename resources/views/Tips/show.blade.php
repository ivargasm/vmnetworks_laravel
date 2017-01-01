@extends('layouts.principal')
	@section('content')
		@section('menu')
		<section class="blog">
			@parent
			@foreach($videos as $video)
			<div class="posts card white row">
				<div class="post col s12">
					<article>
						<p class="publico col s6 left-align">Autor: {{$video->name}}</p>
						<p class="titulo">{{$video->titulo}}</p>
						<div class="thumb">
							<div class="video">
								<iframe class="vy" src="{{$video->video}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>	
							</div>
						</div>
						@if(!empty($video->descripcion))
							<p class="articulo flow-text">{!!$video->descripcion!!}</p>
						@else
							<p class="hide">{!!$video->descripcion!!}</p>
						@endif
					</article>
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
				    this.page.url = 'http://localhost:8080/vmnetworks_laravel/public/tips/{{$video->id}}';  // Replace PAGE_URL with your page's canonical URL variable
				    this.page.identifier = '{{$video->id}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
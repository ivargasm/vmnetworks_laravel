@extends('layouts.principal')
@section('content')
	@section('menu')
		<div class="content_admin">
			@parent
			<section class="administracion">
				<div class="row">
					<div class="col m6 s12">
						<div class="menu_admin">
							<a href="{{URL::to(action('BlogController@create'))}}">
								<div class="img_blog">
									{{Html::image('imgs/blog/6audi-tts-x1.jpg','Blog',array('class'=>'responsive-img'))}}
								</div>
								<div class="text_blog">
									Blog
								</div>
							</a>
						</div>
					</div>
					<div class="col m6 s12"></div>
				</div>
			</section>
		</div>
	@endsection
@endsection
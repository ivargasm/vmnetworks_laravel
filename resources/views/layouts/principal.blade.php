<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>VMNetWorks - Conviviendo con la tecnologia</title>

	{!!Html::style('css/font-awesome.min.css')!!}
	{!!Html::style('css/materialize.min.css')!!}
	{!!Html::style('css/estilos.css')!!}
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="{{URL::to('/imgs/favicon.ico')}}" />
	<link rel="shortcut icon" type="image/png" href="{{URL::to('/imgs/favicon.png')}}" />
	<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
	<link rel="author" type="text/plain" href="humans.txt" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="servicio tecnico de computadoras, reparacion de computadoras, mantenimiento de computadoras">
	<meta name="description" content="VMNetworks conviviendo con la tecnologia, resuelbe tus problemas de servico tecnico en computadoras y mas">
</head>
<body>

	@section('menu')
		<header>
			<div class="navbar-fixed">					
				<nav>
				    <div class="nav-wrapper blue-grey darken-4">
				    	<div class="menu-logo brand-logo">
			    			<a href="{{URL::to('/')}}">
			    				{{ HTML::image('imgs/vmnetworks-logo-02.png', "Imagen no encontrada", array('class' => 'responsive-img', 'title' => 'VMNetworks')) }}
			    			</a>
			    		</div>
				    	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				     	<ul class="right hide-on-med-and-down">
				        	<li><a href="{{URL::to('/')}}">Inicio</a></li>
				        	<li><a href="{{URL::to('servicios')}}">Servicios</a></li>
				        	<li><a href="{{URL::to('contacto')}}">Contacto</a></li>
				        	<li><a href="{{URL::to('blog')}}">Blog</a></li>
				        	<li><a href="{{URL::to('tips')}}">Tips</a></li>
				        	
				    	</ul>
				    	<ul class="side-nav" id="mobile-demo">
				    		<li><a href="{{URL::to('/')}}">Inicio</a></li>
				        	<li><a href="{{URL::to('servicios')}}">Servicios</a></li>
				        	<li><a href="{{URL::to('contacto')}}">Contacto</a></li>
				        	<li><a href="{{URL::to('blog')}}">Blog</a></li>
				        	<li><a href="{{URL::to('tips')}}">Tips</a></li>
				        	
				    	</ul>
				    </div>
				</nav>	
			</div>
		</header>
	@show

	@yield('content')

	<footer class="page-footer blue-grey darken-4">
	 	<div class="container">
	  	<div class="row">
	  		<div class="col l6 m6 s12">
	    		<h5 class="white-text footer-title flow-text">VMNetworks</h5>
	    		<div class="footer-logo">
	    			{{ HTML::image('imgs/vmnetworks-logo.png', "Imagen no encontrada", array('class' => 'responsive-img', 'title' => 'VMNetworks')) }}
	    		</div>
	  		</div>
	  		<div class="col l4 m6 offset-l2 s12">
	      	<h5 class="white-text">Contacto</h5>
	      	<ul>
	        	<li><a href="{{URL::to('tarjeta/1')}}" class="grey-text text-lighten-3">Ismael Vargas</a></li>
	        	<li><a href="{{URL::to('tarjeta/2')}}" class="grey-text text-lighten-3">Janet Soria</a></li>
	      		<li><a class="grey-text text-lighten-3" href="">Telefono: 442 181 68 60</a></li>
	      		<li><a class="grey-text text-lighten-3" href="">Telefono: 448 169 57 96</a></li>
	        	<li><a class="grey-text text-lighten-3" href="mailto:contacto@vmnetworks.com.mx">Correo: contacto@vmnetworks.com.mx</a></li>
	        	<br>
	        	@if(!Auth::user())
	        		<li><a href="{{URL::to('/usuarios')}}" class="grey-text text-lighten-3 btn">Ingresa</a></li>
	        	@else
	        		<li><a href="{{URL::to('/logout')}}" class="red darken-4 grey-text text-lighten-3 btn">Cerrar</a></li>
	        	@endif
	      	</ul>
	  		</div>
	  	</div>
	  	</div>
	  	<div class="footer-copyright">
	    	<div class="container">
	    		© 2015 Copyright VMNetworks
	    		<a class="grey-text text-lighten-4 right" href="mailto:contacto@vmnetworks.com.mx">contacto@vmnetworks.com.mx</a>
	    	</div>
	  	</div>
	</footer>

	{!!Html::script('js/jquery-2.1.3.min.js')!!}
	{!!Html::script('js/materialize.min.js')!!}
	{!!Html::script('js/main.js')!!}
</body>
</html>
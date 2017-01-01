@extends('layouts.principal')
@section('content')
	@section('menu')
		<section class="full-screen">
			<section class="inicio full-screen teal lighten-2">
				<div class="opaco full-screen">
					@parent
					<article class="cansado center-align white-text">
						<div class="row">
							<div class="col m5 l3 logo_sombra">
								<img src="imgs/vmnetworks-logo.png" alt="" class="responsive-img">
							</div>
							<div class="col m7 l9 introduccion">
								<div class="col s12 flow-text deep-orange-text darken-4 titulo_cansado">
									Cansado del mal servicio
								</div>
								<div class="col s12 flow-text">
									En VMNetworks te ofrecemos el mejor <h1>servicio técnico en cómputo</h1> y tecnologías de información a hogares, despachos, pequeñas y medianas empresas. Nuestro modelo de servicio es documentado, garantizado y acompañado de diagnóstico y servicio a domicilio.
								</div>
							</div>
							<div class="row servicios">
								<div class="col s6 m6 l3">
									<h5>Laptops</h5>
									<div class="pc-lap circle valign-wrapper modal-trigger" data-target="pc-lap"><span class="icon-display valign"></span></div>
									<div id="pc-lap" class="modal blue-grey-text darken-4">
									    <div class="modal-content">
									    	<h4>Laptops</h4>
									      	<p>Reparación y servicio a computadoras y laptops que no encienden, lentas, dañadas por virus, con publicidades estorbosas, identificamos y ofrecemos soluciones para que tus computadoras no dejen de producir, ofrecemos cuidado y mantenimiento por personal calificado.</p>
									    </div>
									    <div class="modal-footer">
									      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
									    </div>
									</div>
			            		</div>
								<div class="col s6 m6 l3">
									<h5>Asistencia Técnica</h5>
									<div class="asis-tec circle valign-wrapper modal-trigger" data-target="asis-tec"><span class="icon-mobile valign"></span></div>
									<div id="asis-tec" class="modal blue-grey-text darken-4">
									    <div class="modal-content">
									    	<h4>Asistencia Técnica</h4>
									      	<p>No hay problema que no podamos resolver, todos los días solucionamos entre 10 y 25 incidencias por teléfono, para empresas y negocios, servicio presencial o vía remota, Pc´s, LapTops, Servidores, Redes y Conectividad, asistencia a usuarios, asistencia especializada, nosotros dominamos la informática.</p>
									    </div>
									    <div class="modal-footer">
									      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
									    </div>
									</div>
								</div>
								<div class="col s6 m6 l3">
									<h5>Filtrado de Internet</h5>
									<div class="internet circle valign-wrapper modal-trigger" data-target="internet"><span class="icon-earth valign"></span></div>
									<div id="internet" class="modal blue-grey-text darken-4">
									    <div class="modal-content">
									    	<h4>Filtrado de Internet</h4>
									      	<p>¿Sabes cuánto dinero pierdes cuando tus empleados pasan horas en facebook?, tus email´s salen lentos porque alguien mira YouTube, ayudamos a las empresas a filtrar Internet para que no se pierda la productividad, contactanos y solucionaremos tu problema!</p>
									    </div>
									    <div class="modal-footer">
									      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
									    </div>
									</div>
								</div>
								<div class="col s6 m6 l3">
									<h5>Respaldos</h5>
									<div class="respaldos circle valign-wrapper modal-trigger" data-target="respaldos"><span class="icon-database valign"></span></div>
									<div id="respaldos" class="modal blue-grey-text darken-4">
									    <div class="modal-content">
									    	<h4>Respaldos</h4>
									      	<p>Sabemos lo importante que es contar con respaldos de información de tu computadora y lo que significa perderla o acordarse de hacerlo cada semana.Administramos un Software que realiza los respaldos de forma automática. Para que tu respaldo se guarde en el servidor o en un Disco Externo.</p>
									    </div>
									    <div class="modal-footer">
									      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</section>	
		</section>
		<section class="empresa flow-text">
			<article class="nacio">
				<div class="row">
					<div class="col s12">
						<div class="la_empresa">
							<p class="vmnetworks">VMNetworks</p>
							<p>VMNetworks es una empresa debidamente constituida en Querétaro Querétaro, que cuenta con un grupo de ingenieros, técnicos e instaladores con una gran experiencia y excelente actitud de servicio.</p>
						</div>
					</div>
				</div>
			</article>
			<article class="servicio">
				<div class="row">
					<div class="col l4 hide-on-med-and-down image">
						<img src="imgs/SoporteTecnico.png" alt="la_empresa" class="responsive-img">
					</div>
					<div class="col l8 s12">
						<p>En VMNetworks tú te mereces el mejor servicio por esta razón nos esforzamos en ofrecerte precios y calidad competitiva, respaldados por el mejor servicio postventa, nuestra meta es ofrecerte nuestras soluciones en el menor tiempo posible. Nuestros ingenieros de alto nivel llevan consigo una experiencia de más de 8 años, de este modo tanto su equipo como sus datos se encuentran en buenas manos. Todos nuestros servicios cuentan con una garantía de 30 días.</p>
					</div>
				</div>
			</article>
		</section>
		<section class="contratanos full-screen white-text">
			<div class="opaco full-screen">
				<div class="container">
					<div class="row">
						<div class="col s12">
							<p class="razones flow-text">Razones para contratarnos</p>
						</div>
					</div>
					<div class="row contratar">
						<div class="col l3 m6 s12">
							<div class="card">
							    <div class="card-image waves-effect waves-block waves-light">
							      	<p class="activator">1</p>
							    </div>
							    <div class="card-content">
							      	<span class="card-title activator white-text text-darken-4">Nuestra experiencia y la constante capacitación, generan en nosotros la seguridad resolver sus problemas informáticos.<i class="material-icons right">more_vert</i></span>
							      	<p><a class="activator btn waves-effect waves-light">Conoce más...</a></p>
							    </div>
							    <div class="card-reveal">
							      	<span class="card-title grey-text text-darken-4">Servicio Experimentado<i class="material-icons right">close</i></span>
							      	<p class="blue-grey-text darken-4">Nuestra experiencia y la constante capacitación, generan en nosotros la seguridad de resolver sus problemas informáticos.
									Reparamos cualquier equipo y servidores, cualquier marca, cualquier falla, Asesoría y Venta, Solución de problemas con redes y routers, vpn y acceso remoto.</p>
							    </div>
							</div>
						</div>
						<div class="col l3 m6 s12">
							<div class="card">
							    <div class="card-image waves-effect waves-block waves-light">
							      	<p class="activator">2</p>
							    </div>
							    <div class="card-content">
							      	<span class="card-title activator white-text text-darken-4">Nuestro servicio genera confianza ya que no improvisamos, tenemos la capacidad y el conocimiento para realizar diagnósticos acertados<i class="material-icons right">more_vert</i></span>
							      	<p><a class="activator btn waves-effect waves-light">Lee más...</a></p>
							    </div>
							    <div class="card-reveal">
							      	<span class="card-title grey-text text-darken-4">Servicio Confiable<i class="material-icons right">close</i></span>
							      	<p class="blue-grey-text darken-4">Nuestro servicio genera confianza ya que no improvisamos, tenemos la capacidad y el conocimiento para realizar diagnósticos acertados.
									Con nuestra actitud de servicio generamos confianza, vamos a resolver tu problema para que tu estés tranquilo de contar con un equipo bien conformado de especialistas en el tema.</p>
							    </div>
							</div>
						</div>
						<div class="col l3 m6 s12">
							<div class="card">
							    <div class="card-image waves-effect waves-block waves-light">
							      	<p class="activator">3</p>
							    </div>
							    <div class="card-content">
							      	<span class="card-title activator white-text text-darken-4">A diferencia de otras empresas VMNetworks te ofrece mejoras y soluciones antes de que sucedan los problemas.<i class="material-icons right">more_vert</i></span>
							      	<p><a class="activator btn waves-effect waves-light">Aprende más...</a></p>
							    </div>
							    <div class="card-reveal">
							      	<span class="card-title grey-text text-darken-4">Servicio Proactivo<i class="material-icons right">close</i></span>
							      	<p class="blue-grey-text darken-4">A diferencia de otras empresas VMNetworks te ofrece mejoras y soluciones antes de que sucedan los problemas.
									Al diagnosticar te diremos todas las posibles fallas a corto y mediano plazo, así no tendrás que invertir una y otra vez.</p>
							    </div>
							</div>
						</div>
						<div class="col l3 m6 s12">
							<div class="card">
							    <div class="card-image waves-effect waves-block waves-light">
							      	<p class="activator">4</p>
							    </div>
							    <div class="card-content">
							      	<span class="card-title activator white-text text-darken-4">¡Ser profesional significa hacer las cosas para lo que estamos capacitados, bien y sin errores, somos un equipo de profesionales!<i class="material-icons right">more_vert</i></span>
							      	<p><a class="activator btn waves-effect waves-light">Llámanos!</a></p>
							    </div>
							    <div class="card-reveal">
							      	<span class="card-title grey-text text-darken-4">Servicio Profesional<i class="material-icons right">close</i></span>
							      	<p class="blue-grey-text darken-4">¡Ser profesional significa hacer las cosas para lo que estamos capacitados, bien y sin errores, somos un equipo de profesionales!
									Déjanos hacer lo nuestro, solucionar problemas informáticos, darte respuestas y garantizarte que tus equipos no dejen de producir.</p>
							    </div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</section>
	@endsection
@endsection
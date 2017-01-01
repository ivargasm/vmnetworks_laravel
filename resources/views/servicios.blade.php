@extends('layouts.principal')
@section('content')
	@section('menu')
		<section class="servises">
			@parent
			<section class="hacemos">
				<div class="vmnetworks">
					VMNetworks
				</div>
				<div class="row mensaje">
					<div class="col m8 s12">
						<div class="falla flow-text">
							<p>
								Las computadoras de escritorio siguen siendo una herramienta de trabajo indispensable, al momento que sufren una falla pueden afectar nuestra actividad diaria o de plano parar por completo nuestra productividad, despreocúpate en VMNetworks te ofrecemos una rápida solución. 
							</p>
						</div>
					</div>
					<div class="col m4 hide-on-small-only">
						<img src="imgs/SurfaceUpdate.jpg" alt="fallas" class="responsive-img">
					</div>
				</div>
				<article class="mantenimientos">
					<div class="row">
						<div class="col s4">
							<p class="center-align">Reparaciones</p>
							<div class="reparaciones modal-trigger" data-target="reparacion">
								<div class="valign-wrapper">
									<span class="icon-aid-kit white-text valign"></span>
								</div>
							</div>
							<div id="reparacion" class="modal flow-text">
							    <div class="modal-content">
							      	<h4>Mantenimiento De Equipos de computo</h4>
							      	<p>Profesionales con más de 8 años de experiencia, estarán a cargo de tu equipo, ofreciéndote la mejor solución existente, ya sea que tu equipo no encienda, presente la pantalla rota o se vea negra, la batería no cargue, haga ruidos raros, tenga virus o spyware, entre otros.</p>
							    </div>
							    <div class="modal-footer">
							      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
							    </div>
							 </div>
						</div>
						<div class="col s4">
							<p class="center-align">Respaldos</p>
							<div class="respaldo modal-trigger" data-target="respaldos">
								<div class="valign-wrapper">
									<span class="icon-database white-text valign"></span>
								</div>
							</div>
							<div id="respaldos" class="modal flow-text">
							    <div class="modal-content">
							      	<h4>Recuperación De Datos.</h4>
							      	<p>La pérdida de datos es un evento traumático, en VMNetworks hacemos de este proceso lo más tranquilo para usted ofreciéndole amplias garantías; contamos con las herramientas más sofisticadas a la par de ingenieros expertos con más de 8 años de experiencia.</p>
							    </div>
							    <div class="modal-footer">
							      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
							    </div>
							 </div>
						</div>
						<div class="col s4">
							<p class="center-align">Virus</p>
							<div class="virus modal-trigger" data-target="virus">
								<div class="valign-wrapper">
									<span class="icon-bug white-text valign"></span>
								</div>
							</div>
							<div id="virus" class="modal flow-text">
							    <div class="modal-content">
							      	<h4>Eliminación De Virus</h4>
							      	<p>Cada semana se liberan a la red miles de amenazas que son potencialmente peligrosas para su sistema, en VMNetworks lo protegemos contra estas amenazas o en su caso remover virus, spyware y todo tipo de malwares, además de poner al día su equipo con las actualizaciones de software más recientes.</p>
							    </div>
							    <div class="modal-footer">
							      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
							    </div>
							 </div>
						</div>
					</div>
				</article>
				<article class="servicios">
					<div class="row">
						<div class="col m4 s12">
							<div class="hard-service">
								<div class="card">
								    <div class="card-image waves-effect waves-block waves-light">
								      	<img class="activator" src="imgs/hard-service.jpg" alt="hard-service">
								    </div>
								    <div class="card-content">
								      	<span class="card-title activator grey-text text-darken-4 flow-text">Hard Service<i class="material-icons right">more_vert</i></span>
								    </div>
								    <div class="card-reveal">
								      	<span class="card-title grey-text text-darken-4">Hard Service<i class="material-icons right">close</i></span>
								      	<p>Servicio profesional de limpieza de los componentes internos del equipo, remplazo de pasta disipadora, lubricación y limpieza  del ventilador, descontaminación de la tarjeta madre, teclado, carcasa, calibración de la unidad óptica, limpieza externa. <br>
	 									El no realizar el mantenimiento periódico compromete drásticamente la reducción de la vida útil del equipo, aumenta la temperatura de los componentes al grado de fracturar las soldaduras y poner en riesgo el correcto funcionamiento del hardware, en VMNetworks nos preocupamos por ti ofreciéndote el mejor servicio, precio y desempeño.</p>
								    </div>
								</div>
							</div>
						</div>
						<div class="col m4 s12">
							<div class="soft-service">
								<div class="card">
								    <div class="card-image waves-effect waves-block waves-light">
								      	<img class="activator" src="imgs/soft-service.jpg" alt="soft-service">
								    </div>
								    <div class="card-content">
								      	<span class="card-title activator grey-text text-darken-4 flow-text">Soft Service<i class="material-icons right">more_vert</i></span>
								    </div>
								    <div class="card-reveal">
								      	<span class="card-title grey-text text-darken-4">Soft Service<i class="material-icons right">close</i></span>
								      	<p>Servicio especializado de Software, el cual incluye respaldo de información, correos electrónicos, eliminación de virus y/o amenazas que pongan en riesgo tus archivos o privacidad, configuración de cuentas de correo, configuración de controladores, instalación de AntiVirus, y paquetería básica. <br>
	 									La instalación de programas no certificados en los equipos, la navegación inapropiada en la web, la infección por virus o programas espía en forma de barras de complemento en nuestro navegador web merman el desempeño de nuestro equipo, convirtiendo el trabajo diario en una pesada carga ya que tenemos que pasar valiosos minutos en espera; no te arriesgues a la perdida de tu información y/o exponerte a los cibercriminales.</p>
								    </div>
								</div>
							</div>
						</div>
						<div class="col m4 s12">
							<div class="total-care">
								<div class="card">
								    <div class="card-image waves-effect waves-block waves-light">
								      	<img class="activator" src="imgs/desasoft.jpg" alt="total-care">
								    </div>
								    <div class="card-content">
								      	<span class="card-title activator grey-text text-darken-4 flow-text">Total Care<i class="material-icons right">more_vert</i></span>
								    </div>
								    <div class="card-reveal">
								      	<span class="card-title grey-text text-darken-4">Total Care<i class="material-icons right">close</i></span>
								      	<p>Con el fin de garantizar la mejor opción de precio y desempeño ponemos a tu alcance nuestro servicio profesional que une en un solo servicio el Hard service y Soft Service.</p>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</article>
			</section>
		</section>
	@endsection
@endsection
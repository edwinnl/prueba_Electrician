
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ESPACIOS ACADEMICOS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Electrician Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!--// css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<div class="banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 14 / Avenida 15 Facatativá, Colombia</p>
						</div>
						
						<div class="banner-address-left right">
							<p><i class="fa fa-phone" aria-hidden="true"></i> (+57 1) 892 0706 | 892 0707</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">SIAAF</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php
					  $link = mysql_connect("localhost", "root", "admin"); 
						  mysql_select_db("esp_academicos", $link); 
						  
					  
					  if (empty($_SESSION["rol"])) {
						  
					  		
				
					  
						  ?>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                	<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="login.php">Login</a></li>
							
						</ul>
						<div class="clearfix"> </div>
					</nav>
				</div>
                <?php	  
					 }else{ //if rol=null
					 	if ($_SESSION["rol"] == 1) {
				?>	 
					 <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                		<nav class="cl-effect-13" id="cl-effect-13">
							<ul class="nav navbar-nav">
                            	<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Apoyo Academico<b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="buscaAuxiliar.php">Consultar</a></li>
										<li><a href="regisAuxApoyo.php">Registar</a></li>
									</ul>
								</li>
                            	<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Formatos Academicos<b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="verFormSubidos.php">Consultar</a></li>
										<li><a href="solActualizarForm.php">Registar</a></li>
									</ul>
								</li>
                            	<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil<b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="editPerfil.php">Actualizar Informacion</a></li>
										<li><a href="cambiarContrasenia.php">Cambiar Contraseña</a></li>
									</ul>
								</li>
                                <li class="collapse navbar-collapse navbar-left"><a href="logout.php">Salir</a></li>
							</ul>
						
						<div class="clearfix"> </div>
					</nav>
				</div>
				
				<?php
						}//rol=1
						if ($_SESSION["rol"] == 2) {
				?>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                	<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Docente<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="buscaDocente.php">Consultar</a></li>
                                	<li><a href="regisDocente.php">Registar</a></li>
                                	<li><a href="buscaDocenteEdit.php">Editar</a></li>
                                	<li><a href="buscaDocenteElim.php">Eliminar</a></li>
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Secretaria<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="buscaSecretaria.php">Consultar</a></li>
                                	<li><a href="regisSecretaria.php">Registar</a></li>
                                	<li><a href="buscaSecreEdit.php">Editar</a></li>
                                	<li><a href="buscaSecreElim.php">Eliminar</a></li>
								</ul>
							</li>
							<li class="active"><a href="verSolicitudes.php">Solicitudes</a></li>
                    		<li><a href="logfout.php">Horario</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Docentes</a></li>
									<li><a href="typography.html">Estudiantes</a></li>
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="editPerfil.php">Actualizar Informacion</a></li>
									<li><a href="cambiarContrasenia.php">Cambiar Contraseña</a></li>
								</ul>
							</li>
                            <li class="collapse navbar-collapse navbar-left"><a href="logout.php">Salir</a></li>
						</ul>
						<div class="clearfix"> </div>
					</nav>
				</div>
				
                <?php
						}//rol=2
						if ($_SESSION["rol"] == 3) {
				?>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                	<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Practica Grupal<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="verEstadoSolic.php">Consultar Solicitud</a></li>
                      				<li><a href="solicitudDocente.php">Registar Solicitud</a></li>
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Practica Libre<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="verEstadoSolic.php">Consultar Solicitud</a></li>
                      				<li><a href="solicitudLibre.php">Registar Solicitud</a></li>
								</ul>
							</li>
                            <li><a href="regisAsistencia.php">Asistencia</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="editPerfil.php">Actualizar Informacion</a></li>
									<li><a href="cambiarContrasenia.php">Cambiar Contraseña</a></li>
								</ul>
							</li>
							<li class="collapse navbar-collapse navbar-left"><a href="logout.php">Salir</a></li>
						</ul>
						<div class="clearfix"> </div>
					</nav>
				</div>
				
                <?php
						}//rol=3
						if ($_SESSION["rol"] == 4) {
				?>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                	<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="verEstadoSolicForm.php">Consultar Solicitud</a></li>
                        			<li><a href="solActualizarForm.php">Registar Solicitud</a></li>
                        			<li><a href="#">Editar Solicitud</a></li>
                        			<li><a href="#">Eliminar Solicitud</a></li>
								</ul>
							</li>
							<li><a href="#">Horarios</a></li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="editPerfil.php">Actualizar Informacion</a></li>
									<li><a href="cambiarContrasenia.php">Cambiar Contraseña</a></li>
								</ul>
							</li>
							<li class="collapse navbar-collapse navbar-left"><a href="logout.php">Salir</a></li>
						</ul>
						<div class="clearfix"> </div>
					</nav>
				</div>
				
                <?php
						}//rol=4
					 }//else rol= algun numero
				?>
			</nav>

					
				</div>
			</div>
            <!-- slider -->
			<div class="w3layouts-banner">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>AULAS DE SISTEMAS</h3>
										<p>Cuenta con seis aulas de sistemas dotadas de computadores en perfecto estado, entre ellas una sala dispuesta para presentaciones con herramientas de multimedia.</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>LABORATORIOS DE PSICOLOGIA</h3>
										<p>Dotadas de elementos necesearios para las practicas el area de psicologia tiene a dispocision tres laboratorios, divididos en camara de gessel, pecera y auditorio.</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>LABORATORIOS DE CIENCIAS AGROPECUARIAS</h3>
										<p>Labortaorios completos y dotados de todos las herramientas necesarias para realizar practicas acordadas en las diferentes carreras para uso de docentes y estudiantes.</p>
									</div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->

				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->


<!-- copy-right -->
	<div class="w3_agileits_copy_right_social">
		<div class="container">
			<div class="col-md-6 agileits_w3layouts_copy_right">
				<p>© 2017 Electrician. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="col-md-6 w3_agile_copy_right">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
<!-- //copy-right -->
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/bootstrap.js"></script>
<!-- //here ends scrolling icon -->
</body>	
</html>
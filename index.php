<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'config.php';
require 'lib/contact.php';
$contact = new contact($datosConexionBD);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Centro Histórico de Mexicali | Inicio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Centro Histórico de Mexicali, Centro Historico de Mexicali, Centro Historico Mexicali, Mexicali Turismo, 
Catedral Mexicali, Casa de la Cultura Mexicali, Chinesca, La Chinesca, Chinesca Mexicali" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!--// sweet alert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									 <img src="../../img/logo.png" width="130px" alt="">
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<li class="active"><a href="index.php" data-hover="Home">Inicio</a> </li>
								<li><a href="historia.html" data-hover="About">Historia </a> </li>
								<li><a href="galeria.html"  data-hover="Gallery">Galería</a></li>
								 <li><a href="chinesca.html"  data-hover="Pagis">La Chinesca</a></li>
								<li><a href="contacto.html" data-hover="Contact">Contacto</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
					  <div class="clearfix"></div>	
				</div>
			</div>
			<div class="banner-slider">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="w3l_banner_info">
										<h3>LA CHINESCA</h3>
										<p>Para conocer más sobre este lugar da click <a href="chinesca.html">aquí</a>.</p>
									</div>
								</li>
								<li>
									<div class="w3l_banner_info">
										<h3>Casa de La Cultura</h3>
										<p>Para conocer más sobre este lugar da click <a href="historia.html">aquí</a>.</p>
									</div>
								</li>
								<li>
									<div class="w3l_banner_info">
										<h3>La Catedral de Nuestra Señora de Guadalupe</h3>
										<p>Para conocer más sobre este lugar da click <a href="historia.html">aquí</a>.</p>
									</div>
								</li>
								<li>
									<div class="w3l_banner_info">
										<h3>Hotel del Norte</h3>
										<p>Para conocer más sobre este lugar da click <a href="historia.html">aquí</a>.</p>
									</div>
								</li>
								<li>
									<div class="w3l_banner_info">
										<h3>Pagoda</h3>
										<p>Para conocer más sobre este lugar da click <a href="historia.html">aquí</a>.</p>
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
	<!-- welcome -->
	<div class="welcome" id="welcome">
		<div class="container">
			<div class="w3-welcome-heading">
				<h2>Bienvenidos</h2>
			</div>
			<div class="w3l-welcome-text">
				<br>
				<p>En este portal encontrarás información sobre los lugares que comprenden el Centro Histórico de Mexicali, B.C. , así como breves reseñas desde sus inicios, material multimedia e información de interés. Durante la visita del sitio podrás conocer un poco más de este icónico lugar de Mexicali lleno de secretos y curiosidades.</p>
			</div>
			<div class="w3l-welcome-info">
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="img/Bienvenidos1.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="img/Bienvenidos2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div id="services" class="services">
		<div class="container">  
			<div class="w3-welcome-heading">
				<h3>Lugares de Interés</h3>
			</div>
			<div class="services-w3ls-row">
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<a href="chinesca.html"><span class="glyphicon glyphicon glyphicon-globe effect-1" aria-hidden="true"></span></a>
					<h5>La Chinesca</h5>
					<p>Barrio ubicado al interior de la ciudad de Mexicali, B.C. Se cree que tiene la mayor concentración per cápita de residentes de origen chino del Municipio y muy probablemente de todo el norte de México.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<a href="historia.html"><span class="glyphicon glyphicon glyphicon-music effect-1" aria-hidden="true"></span></a>
					<h5>La Casa de la Cultura</h5>
					<p>El edificio de la escuela Cuauhtémoc, hoy casa de cultura, se comenzó a construir en 1915. Se inauguró el 16 de septiembre de 1916, comenzando las clases el 1ro. de noviembre del mismo año.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<a href="historia.html"><span class="glyphicon glyphicon glyphicon-bell effect-1" aria-hidden="true"></span></a>
					<h5>La Catedral de Nuestra Señora de Guadalupe</h5>
					<p>Entre 1917 y 1918 se inauguro la primera Iglesia Guadalupana que era un templo hecho de madera y estuco ubicado en el centro histórico de la ciudad de Mexicali.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid">
					<a href="historia.html"><span class="glyphicon glyphicon glyphicon-briefcase effect-1" aria-hidden="true"></span></a>
					<h5>El Hotel del Norte</h5>
					<p>Anfitrión de numerosas personalidades de los ámbitos político, empresarial y artístico, entre ellos el presidente Gral. Lázaro Cárdenas y artistas como Pedro Infante, José Alfredo Jiménez, entre otros.</p>
				</div> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
	<!-- //services -->
	<!-- feedback -->
	<div class="feedback_dot">
		<div class="jarallax feedback">
			<div class="container">
				<div class="w3-welcome-heading">
					<h3>Comentarios</h3>
				</div>
				<div class="agileits-feedback-grids">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<?php
						$getLastComments = $contact->getLastComments($settings['num_comments']);
						foreach($getLastComments as $row)
						{
							?>
								<div class="item">
									<div class="feedback-info">
										<div class="feedback-top">
											<p> <?=$row['comment'];?> </p>
										</div>
										<div class="feedback-grids">
											<div class="feedback-img-info">
												<h5><?=$row['name'];?></h5>
												<p><?=$row['city'];?></p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
						<?php
						}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //feedback -->
	<!-- news-letter -->
	<div class="news-letter">
		<div class="container">
			<div class="w3-welcome-heading wthree-subscribe">
				<h3>¡Suscríbete para recibir Información!</h3>
			</div>
			<div class="agileinfo-subscribe">
				<form id="form_comments" method="post">
					<div class="col-xs-12">
						<input type="text" placeholder="Nombre" name="name"  required="">
						<input type="email" placeholder="Correo Electrónico" name="email"  required="">
					</div>
					<div class="col-xs-12">
						<textarea name="comment" id="comment" cols="10" rows="5" placeholder="Escriba su comentario aqui..."></textarea>
					</div>
					<div class="col-xs-12">
						<input type="submit" value="Comentar">
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	<!-- //news-letter -->
	<!-- footer -->
	<div class="footer">
		<div class="copyright">
			<p>© 2017 FCA-UABC. Todos los Derechos Reservados | Template Diseñado por <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->
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
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="js/owl.carousel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
	<script>
		$("#form_comments").submit(function(){
			 $.ajax({
						type: "POST",
						url: 'actions/contact/comment.php',
						data: $("#form_comments").serialize()
				}).done(function(res){
				 console.log(res);
				 if(res === "Gracias, tu comentario fue enviado")
					 {
						 swal(
								'Excelente!',
								''+res,
								'success'
							)
						 location.reload();
					 }
				 else
					 {
						 swal(
								'Oops...',
								'Vuelve a intentarlo!',
								'error'
							)
					 }
					
				});
			return false;
		});
	</script>
</body>	
</html>
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
	<!-- css -->
<link rel="stylesheet" href="css/carousel.css" type="text/css" media="all" />
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
<!-- 									<h1 class="animated wow pulse" data-wow-delay=".5s">
									<a href="index.html">Perfect <span>Travel</span></a></h1> -->
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<li class="active"><a href="index.php" data-hover="Home">Inicio</a> </li>
								<li><a href="about.html" data-hover="About">Historia </a> </li>
								<li><a href="gallery.html"  data-hover="Gallery">Galería</a></li>
								 <li><a href="chinesca.html"  data-hover="Pagis">La Chinesca</a></li>
<!-- 								<li class="dropdown">
									<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="icons.html">Icons</a></li>
										<li><a href="codes.html">Short Codes</a></li>
									</ul>
							  </li> -->
								<li><a href="contact.html" data-hover="Contact">Contacto</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
			
<!-- 					<div class="header-left animated wow fadeInLeft animated" data-wow-delay=".5s" >
							<ul>
								<li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">@example.com</a></li>
								<li><i class="glyphicon glyphicon-earphone"></i>+1234 567 892</li>
								
							</ul>
						</div> -->
					  <div class="clearfix"></div>	
				</div>
			</div>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img class="img-carousel" src="img/chinesca.JPG" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text ">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span >La<strong>Chinesca</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span class="hidden-xs">La Chinesca es un barrio ubicado al interior de la ciudad de Mexicali, en Baja California</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Ver Mas</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			     <div class="item">
			    	<img class="img-carousel" src="img/catedral.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text ">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span >La Catedral de nuestra señora de guadalupe</span>
                            </h2>
                            <br>
                            <h3>
                            	<span class="hidden-xs">Sus Inicios fueron  el 17 de Mayo de 1918</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Ver Mas</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="img/hotel.JPG" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text ">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Hotel Del Norte</span>
                            </h2>
                            <br>
                            <h3>
                            	<span class="hidden-xs" >Hotel del Norte inicia operaciones exactamente empezando la segunda mitad del Siglo XX.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Ver Mas</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="img/Pagoda.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Pagoda</span>
                            </h2>
                            <br>
                            <h3>
                            	<span class="hidden-xs" >La Pagoda es un monumento histórico ubicado en la Plaza de la Amistad en Avenida Madero y Calle Melgar.</span>
                            </h3>
                            <br>
                            <div class="">
                               <a class="btn btn-theme btn-sm btn-min-block" href="#">Ver Mas</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			        <div class="item">
			    	<img src="img/cultura.JPG" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Casa de la Cultura</span>
                            </h2>
                            <br>
                            <h3>
                            	<span class="hidden-xs">centro cultural en donde podemos encontrar una gran variedad de actividades para realizar.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Ver Mas</a></div>
                        </div>
                    </div><!-- /header-text -->
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
			<div class="w3l-welcome-info">
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/3.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3l-welcome-text">
				<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div id="services" class="services">
		<div class="container">  
			<div class="w3-welcome-heading">
				<h3>Our Services</h3>
			</div>
			<div class="services-w3ls-row">
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>
					<h5>Lorem ipsum</h5>
					<p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
					<h5>Ut non lacus</h5>
					<p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>
					<h5>Maecenas rutrum</h5>
					<p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid">
					<span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
					<h5>Phasellus gravida</h5>
					<p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
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
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>History of Agriculture</h4>
					<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. <span>Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.</span></p>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Twitter Posts</h4>
					<ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://mail.com</a> ut aut
							voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Popular Items</h4>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="#"><img src="images/5.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="images/6.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="images/7.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="images/8.jpg" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="#"><img src="images/9.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="images/10.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="images/2.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="images/3.jpg" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
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
						 setTimeout(function(){
							 window.location.reload(1);
							}, 3500);
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
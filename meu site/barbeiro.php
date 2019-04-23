<?php

$base = $_SERVER['DOCUMENT_ROOT'];

?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
	<title>Congresso e Feira ExpoHair</title>
	<meta charset="UTF-8">
	<meta name="description" content="Site oficial Congresso e Feira Expohair">
	<meta name="keywords" content="diva, beauty, beleza, congresso">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
<header id="header" class="header-section">
		<div class="header-warp">
			<!-- logo -->
			<a href="/" class="site-logo">
				<img src="img/logo.png" width="260px" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Navigation Menu -->
			<ul class="main-menu">
				<li><a href="/">Home</a></li>
				<li class="active"><a href="#">Cursos/Palestras/Workshops</a></li>	
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Contato</a></li>
				<li><a href="mapa.php">Planta</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="site-btn sb-line sb-big">(85) 9 9659 - 7500</a>
				<a href="#" class="site-btn sb-big">Inscrições</a>
			</div>
		</div>
</header>
	<!-- Header section end -->

	<!-- brands section -->
	<div class="page-info-section set-bg" data-setbg="img/brands-bg-3.jpg">
			<div class="container" align="center">
				<img src="img/logo_barber.png" alt="">
			</div>
	</div>
	<!--  brands section end -->

	<!-- about section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row about-box">
				<div class="col-md-6 about-img">
					<img src="img/barba-1.jpg" alt="">
				</div>
				<div class="col-md-6">
					<div class="about-content">
						<h2>Não fique de fora!</h2>
						<p>Inscreva-se em uma das categorias e seja o melhor profissional da área. Categorias: "old school" e "new school" - Corte, Desenho, Barba, Freestyle, Vintage.</p>
					</div>
				</div>
			</div>
			<div class="row about-box">
				<div class="col-md-6 about-img col-push">
					<img src="img/barba-2.jpg" alt="">
				</div>
				<div class="col-md-6 col-pull">
					<div class="about-content">
						<h2>Participe!</h2>
						<p>No Expo Hair, haverá diversas outras áreas, cursos, palestras e workshops. Feiras de negócios com dicas e para ensinar a melhor forma de você aumentar ainda mais a demanda da sua barbearia.</p>
						<a href="#" class="site-btn sb-line">(85) 9 9659-7500</a>
						<a href="#" class="site-btn sb-line">Inscreva-se</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about section end -->
	
	<!-- Team section -->
	<section class="popular-services-section">
		<div class="container">
			<div class="section-title">
				<h2>Inspire-se</h2>
			</div>
			<div class="popular-services-slider owl-carousel">
				<div class="service popular-item">
					<img src="img/brands/imgb-1.jpg" alt="">
				</div>
				<div class="service popular-item">
					<img src="img/brands/imgb-2.jpg" alt="">
				</div>
				<div class="service popular-item">
					<img src="img/brands/imgb-3.jpg" alt="">
				</div>
				<div class="service popular-item">
					<img src="img/brands/imgb-4.jpg" alt="">
				</div>
				<div class="service popular-item">
					<img src="img/brands/imgb-5.jpg" alt="">
				</div>
				<div class="service popular-item">
					<img src="img/brands/imgb-6.jpg" alt="">
				</div>
				<div class="service popular-item">
					<img src="img/brands/imgb-7.jpg" alt="">
				</div>
				<div class="service popular-item">
					<img src="img/brands/imgb-8.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Team section end -->
	
	<!-- Footer section -->
<?php
include($base."/rodape.php")
?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

    </body>
</html>
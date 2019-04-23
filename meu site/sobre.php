<?php

$base = $_SERVER['DOCUMENT_ROOT'];

?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
	<title>Congresso e Feira ExpoHair - Sobre</title>
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
				<li><a href="#">Cursos/Palestras/Workshops</a></li>	
				<li  class="active"><a href="sobre.php">Sobre</a></li>
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

                                                
	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.jpg" >
		<div class="container text-center">
			<h2>Sobre</h2>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- about section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row about-box">
				<div class="col-md-6 about-img">
					<img src="img/about-1.jpg" alt="">
				</div>
				<div class="col-md-6">
					<div class="about-content">
						<h2>Bem Vindo a ExpoHair</h2>
						<p>A ExpoHair é um evento tipo Feira e Congresso, sobre o mundo Beauty e de Negócios da Beleza, agregando em um só lugar diversas áreas. Aqui você tem a oportunidade de conhecer marcas e serviços através de cursos, palestras e workshop!</p>
					</div>
				</div>
			</div>
			<div class="row about-box">
				<div class="col-md-6 about-img col-push">
					<img src="img/about-2.jpg" alt="">
				</div>
				<div class="col-md-6 col-pull">
					<div class="about-content">
						<h2>Divulgue sua marca ou serviço</h2>
						<p>A ExpoHair será realizada no Centro de Convenções de Sobral, um espaço amplo e ideal para você apresentar sua marca ou serviço! Participe obtendo seu Stand. Mais informação sobre Stands entre em contato através do telefone:</p>
						<a href="#" class="site-btn sb-line">(85) 9 9659-7500</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about section end -->

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
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
				<li><a href="#">Cursos/Palestras/Workshops</a></li>	
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
	
	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="container text-center">
			<h2>Show de Humor</h2>
		</div>
	</section>
	<!-- Page info section end -->


		<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- blog item -->
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/humor_1.jpg">
							<div class="blog-date">13 Julho, 2019</div>
						</div>
						<div class="blog-content">
							<h3>Show de Humor</h3>
							<p>A ExpoHair tem o prazer de informar que no seu primeiro dia(13/07/2019), teremos show de humor com a presença dos humoristas LAILTINHO BREGA, ESCOLÁSTICA E AUGUSTO BONEQUEIRO, fazendo uma noite de muita diversão e alegria, a partir das 21:30h no Centro de Eventos de Sobral. Não fique de fora!</p>
						</div>
					</div>
					<!-- blog item -->
			</div>
		</div>
	</section>
	<!-- Blog section end -->


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
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
				<li ><a href="/">Home</a></li>
				<li><a href="#">Cursos/Palestras/Workshops</a></li>	
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Contato</a></li>
				<li class="active"><a href="mapa.php">Planta</a></li>
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
			<h2>Planta do Evento</h2>
		</div>
	</section>
	<!-- Page info section end f5ec5f -->
	<div class="back-mapa">
		<center><img src="img/mapa_1.jpg" width="700px" alt=""></center>
	</div>	
	<section class="popular-services-section">
		<div class="container">
			<div class="section-title">
				<h2>Compre agora seu stand!</h2>
			</div>
			<div class="popular-services-slider owl-carousel">
				<div class="service popular-item">
					<i class="flaticon-048-makeup"></i>
					<h2>Produtos e serviços a serem comercializados:</h2>
					<p>Cosméticos, Nails, Perfumaria, Farmacêuticos, Higiene Pessoal, Sistemas, Saúde, Bem-Estar, Equipamentos, Vestuário, Couros e Acessórios para Salões, Clinicas, Hotéis, Spás e Condomínios.</p>
				</div>
				<div class="service popular-item">
					<i class="flaticon-017-soap"></i>
					<h2>Stands para expor seus produtos e serviços:</h2>
					<p>Empresas e profissionais qualificados e preparados para tornarem o evento inesquecível apresentam produtos e serviços para as empresas e profissionais interessadas em comprar.</p>
				</div>
				<div class="service popular-item">
					<i class="flaticon-009-makeup-5"></i>
					<h2>Investimento:</h2>
					<p>Aproveite a tabela promocional com descontos especiais para quem comprar com antecedência do evento.</p>
				</div>
			</div>
			<center><div class="col-lg-10">
			<p>**Adquira logo seu stand quanto mais cedo, mais barato e quem deixar pra última hora, fica sujeito a existência de vagas.
			<br>*Verificar disponibilidade.</p>
			</div>
			<div class="col-lg-8" style="margin: 50px 0px 50px 0px">
				<a href="#" class="site-btn sb-big">PARA COMPRA E MAIS INFORMAÇÕES: (85) 9 9659 - 7500 | TIM & WhatsApp</a>
			</div></center>
		</div>
	</section>
	
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
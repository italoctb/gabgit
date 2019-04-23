<script>
function validatecontatoForm() {
     var nome = document.forms["contatoform"]["nome"].value;
  if (nome == "" || nome == "NULL") {
    return false;
  }
	var email = document.forms["contatoform"]["email"].value;
  if (email == "" || email == "NULL") {
    alert("E-mail Obrigatório");
    return false;
  }
	var assunto = document.forms["contatoform"]["assunto"].value;
  if (assunto == "" || assunto =="NULL") {
    alert("Cidade Obrigatório");
    return false;
  }
	var mensagem = document.forms["contatoform"]["mensagem"].value;
  if (mensagem == "" || mensagem == "NULL") {
    alert("Selecione um Curso");
    return false;
  }
else{
	alert("Tudo Certo");
	return true;
}
}
</script>
<footer id="footer" class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="footer-warp">
			<div class="footer-widgets">
				<div class="row">
					<div class="col-xl-7 col-lg-7">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<div class="footer-widget about-widget">
									<img src="img/logo.png" width="200" alt="">
									<p>Congresso e Feira ExpoHair. Beleza, cabelo, bem-estar, saúde, unhas, cosméticos, perfumaria</p>
									<div class="fw-social">
										<a href="https://www.instagram.com/congressoefeiraexpohair_/"><i class="fa fa-instagram"></i> @congressoefeiraexpohair_</a>
									</div>
								</div> 
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 offset-xl-2 offset-lg-1 offset-md-0">
								<div class="footer-widget list-widget">
									<h4 class="fw-title"><i class="flaticon-009-makeup-5"></i>Principais Serviços</h4>
									<ul>
										<li><a href="noivas.php">Noivas</a></li>
										<li><a href="barbeiro.php">Barbeiro</a></li>
										<li><a href="#">Manicure</a></li>
										<li><a href="#">Pedicure</a></li>
										<li><a href="#">Cabelo</a></li>
										<li><a href="#">Barbeiro</a></li>
										<li><a href="#">Spa</a></li>
									</ul>
									<ul>
										<li><a href="#">Massagem</a></li>
										<li><a href="#">Cosméticos </a></li>
										<li><a href="#">Perfumaria</a></li>
										<li><a href="#">Saúde</a></li>
										<li><a href="#">Farmácia</a></li>
										<li><a href="#">Bem - Estar</a></li>
										<li><a href="#">Detox</a></li>
									</ul>
								</div> 
							</div>
						</div>	
					</div>
					<div class="col-xl-4 col-lg-5 offset-xl-1 offset-lg-0 offset-md-0">
						<div class="footer-widget contact-widget">
							<h4 class="fw-title"><i class="flaticon-039-make-up"></i>Entre em Contato</h4>
							<form class="fw-contact-form" name="contatoform" action="" onsubmit="return validatecontatoForm()" method="post">
								<div class="cf-inputs">
									<div class="cf-input">
										<input type="text" name="nome" placeholder="Nome*">
									</div>
									<div class="cf-input">
										<input type="email" name="email" class="cf-input" placeholder="E-mail*">
									</div>
									<div class="cf-input">
										<input type="text" name="assunto" class="cf-input" placeholder="Assunto*">
									</div>
									<div class="cf-input">
										<input type="text" name="data" maxlength="10" OnKeyPress="formatar('##/##/####', this)" placeholder="Data">
									</div>
								</div>
								<textarea id="mensagem" name="mensagem" placeholder="Mensagem*"></textarea>
								<button type="submit" class="site-btn">Enviar</button>
								<span>&nbsp; *Campo Obrigatório</span>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="#">Cursos/Palestras/Workshops</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="#">Contato</a></li>
						<li><a href="mapa.php">Planta</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Site feito com <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="#">LABOHOU</a></p>
				</div>
			</div>
		</div>
	</footer>
<!-- Button trigger modal -->
									<!-- Modal -->
									<div class="modal fade text-xs-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
											<h4 class="title" id="myModalLabel1">Basic Modal</h4>
										  </div>
										  <div class="modal-body">
											<h5>Check First Paragraph</h5>
											<p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragÃ©e apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflÃ©.</p>
											<p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
											<hr>
											<h5>Some More Text</h5>
											<p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
										  </div>
										  <div class="modal-footer">
											<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
										  </div>
										</div>
									  </div>
									</div>

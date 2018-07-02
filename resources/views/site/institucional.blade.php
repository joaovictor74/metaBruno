<!DOCTYPE HTML>
<html>
	<head>
		<title>Institucional | Ciência da Computação</title>
		@include('site.head')
	</head>
	<body class="is-preload">

		<!-- Seção Cabeçalho -->
		@include('site.header')

		<!-- Seção Nav -->
		@include ('site.nav')

		<!-- Seção Home -->
		@include('site.home')

		<!-- Seção Sobre -->
		<div class="container">
			<hr><h2 style="text-align: center; font-family: Jazz LET, fantasy">Institucional</h2><hr>
			<div class="col-md-12">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p style="text-align:justify">
						A tecnologia tem o poder de transformar vidas, e é com essa crença que
						a FACAPE trabalha tão duro para proporcionar o futuro dos universitários
						que cursam não apenas o curso de Ciência da Computação, mas todos.<br>
						O curso de Ciência da Computação forma profissionais qualificados para 
						desenvolver programas e sistemas de informática, desde o planejamento do 
						projeto até a implantação e gerenciamento do software.<br>
						Por ser da área de ciências exatas, o aluno precisa ter uma boa base 
						matemática e raciocínio lógico desenvolvido.<br>
						Ao final do curso, o estudante de Ciência da Computação será capaz de criar 
						desde ferramentas mais simples com computadores pessoais até sistemas complexos 
						como os de processamento de informações e redes corporativas.<br>
						No mercado de trabalho, o cientista da computação pode atuar como desenvolvedor, 
						programador, analista de TI, arquiteto de softwares, gerente de TI ou pesquisador 
						em instituições públicas ou privadas.
					</p>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>

		<!-- Seção Destaques -->
		<div class="container" style="width: 100%; height: 100%">
			<hr><h2 style="text-align: center; font-family: Jazz LET, fantasy">DESTAQUES</h2><hr>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<div class="col-md-12">
							<div class="col-md-6">
								<img src="img/cc.jpg" alt="Ciência da Computação" style="width:100%;">
							</div>
							<div class="col-md-6">
								<div class="col-md-12">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<strong>
											<br>
											Ciência da computação é a arte e também a ciência relacionada à 
											solução de problemas. Uma das principais portas que conduzem à inovação, 
											à criatividade e à competitividade.
											<br>
											Interessado? Venha fazer o vestibular.
											<hr>
											<p><a href="http://sistemas.facape.br:8080/vestibular/home.do" target="_blank" class="btn btn-primary btn-outline">Saiba mais</a></p>
										</strong>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="col-md-12">
							<div class="col-md-6">
								<img src="img/e-info.jpg" alt="E-Info" style="width:100%;">
							</div>
							<div class="col-md-6">
								<div class="col-md-12">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<strong>
											<br>
											O e-info (Evento acadêmico de Informática da FACAPE) visa fomentar o
											empreendedorismo e movimentar a comunidadede computação da região do 
											Vale do São Francisco e de demais cidades circunvizinhas.
											<hr>
											<p><a href="http://einfofacape.com.br/" target="_blank" class="btn btn-primary btn-outline">Saiba mais</a></p>
										</strong>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="col-md-12">
							<div class="col-md-6">
								<img src="img/inova.jpg" alt="Inova Tech Jr" style="width:100%;">
							</div>
							<div class="col-md-6">
								<div class="col-md-12">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<strong>
											<br>
											Empresa Júnior idealizada e gerenciada por alunos do curso de 
											Ciências da Computação, mas que abrange alunos de todos os cursos da Faculdade.
											<hr>
											<p><a href="http://inovatechjr.com.br/" target="_blank" class="btn btn-primary btn-outline">Saiba mais</a></p>
										</strong>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<br>

		<!-- Seção Footer -->
		<!-- JS -->
		@include('site.footerjs')

	</body>
</html>
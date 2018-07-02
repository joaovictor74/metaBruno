<!DOCTYPE HTML>
<html>
	<head>
		<title>Ciência da Computação</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="{{asset('css/custom.css')}}" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
	</head>
	<body class="is-preload">

		<!-- Seção Cabeçalho -->
		@include('site.header')

		<!-- Seção Nav -->
		@include ('site.nav')
		<!-- Seção Home -->
		<section id="banner">
			<div class="inner">
				<h1 style="font-family: Courier New, monospace">Ciência da Computação</h1>
				<p style="font-family: Courier New, monospace">A tecnologia tem o poder de transformar vidas</p>
			</div>
		</section>

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
		<hr>
		<br>

		<!-- Seção Mural de Informações -->
		<div class="container">
			<hr><h2 style="text-align: center; font-family: Jazz LET, fantasy">Mural de Informações</h2><hr>
			<div class="col-md-12">
				<div class="col-md-4 text-center">
					<i class="fa fa-file-text-o" style="font-size: 80px"></i>
					<hr>
					<h3><a href="http://sistemas.facape.br:8080/vestibular/home.do" target="_blank">vestibular</a></h3>
					<p>Não fez a inscrição ainda?<br>Ainda da tempo, venha fazer.</p>
				</div>
				<div class="col-md-4 text-center">
					<i class="fa fa-edge" style="font-size: 80px"></i>
					<hr>
					<h3><a href="http://einfofacape.com.br/" target="_blank">E-Info</a></h3>
					<p>O E-Info traz uma grande diversidade na programação, trazendo grandes nomes nacionais e internacionais do cenário da computação.</p>
				</div>
				<div class="col-md-4  text-center">
					<i class="fa fa-dollar" style="font-size: 80px"></i>
					<hr>
					<h3><a href="http://1732-26884.el-alt.com/wp-content/uploads/2018/06/atrualizado-em-02.03.pdf" target="_blank">Vagas para estágio</a></h3>
					<p>Interessado em estagiar em algum local que contribua
						com a evolução do seu conhecimento? Mande seu currículo.
					</p>
				</div>
			</div>
			<br>
			<hr>
			<br>
			<div class="col-md-12">
				<div class="col-md-4 text-center">
					<i class="fa fa-arrows-h" style="font-size: 80px"></i>
					<hr>
					<h3><a href="http://www.facape.br/" target="_blank">PME</a></h3>
					<p>O Programa de Mobilidade Estudantil está aberto,
						caso queira saber mais, clica no link acima.
					</p>
				</div>
				<div class="col-md-4 text-center">
					<i class="fa fa-book" style="font-size: 80px"></i>
					<hr>
					<h3><a href="http://ead.facape.br/su/" target="_blank">Semana Universitária</a></h3>
					<p>O evento oferece palestras, mesas-redondas, painéis, minicursos, oficinas 
						e atividade de extensão com os mais variados temas.</p>
				</div>
				<div class="col-md-4 text-center">
					<i class="fa fa-plus-square" style="font-size: 80px"></i>
					<hr>
					<h3><a href="http://sistemas.facape.br:8080/eventosacademicos/actEventos.do?m=carregarHome" target="_blank">Eventos</a></h3>
					<p>Saiba sobre os eventos realizados</p>
				</div>
			</div>
		</div>

		<!-- Seção Footer -->
		<!-- JS -->
		@include('site.footerjs')
		
	</body>
</html>
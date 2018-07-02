<!DOCTYPE HTML>
<html>
	<head>
		<title>Portal do Professor | Ciência da Computação</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	</head>
	<body class="is-preload">

		<!-- Seção Cabeçalho -->
		@include('site.header')

		<!-- Seção Nav -->
		<nav id="menu">
			<ul class="links">
				<li><a href="index.html">Início</a></li>
				<li>
					<a>Informações</a>
					<dl class="links">
						<dd><a href="institucional.html" style="color:aliceblue">Institucional</a></dd>
						<dd><a href="grade.html" style="color:aliceblue">Grade</a></dd>
						<dd><a href="extensao.html" style="color:aliceblue">Projetos de extensão</a></dd>
						<dd><a href="eventos.html" style="color:aliceblue">Eventos</a></dd>
						
					</dl>
				</li>
				<li><a>Portais</a>
					<dl class="links" >
						<dd><a href="aluno.html" style="color:aliceblue">Aluno</a></dd>
						<dd><a href="#" style="color:aliceblue">Professor</a></dd>
						<dd><a href="admin.html" style="color:aliceblue">Administrativo</a></dd>
					</dl>
				</li>
				<li><a href="http://sistemas.facape.br:8080/vestibular/home.do" target="_blank">Vestibular</a></li>
			</ul>
		</nav>

		<!-- Seção Portal do Professor interno -->
		<div class="container">
			<hr><h2 style="text-align: center; font-family: Jazz LET, fantasy">Portal do Professor</h2><hr>
			<div class="col-md-12">
				<h3 class="text-center">Acadêmico</h3>
				<br>
				<div class="col-md-12 text-center">
					<p><a href="" class="btn btn-primary btn-outline">Disciplinas lecionadas</a></p>
				</div>
				<div class="col-md-12 text-center">
					<p><a href="" class="btn btn-primary btn-outline">Alunos matriculados</a></p>
				</div>
				<div class="col-md-12 text-center">
					<p><a href="" class="btn btn-primary btn-outline">Cadastrar notas</a></p>
				</div>
				<div class="col-md-12 text-center">
					<p><a href="" class="btn btn-primary btn-outline">Alterar notas</a></p>
				</div>
				<div class="col-md-12 text-center">
					<p><a href="" class="btn btn-primary btn-outline">Inserir faltas</a></p>
				</div>
				<div class="col-md-12 text-center">
					<p><a href="" class="btn btn-primary btn-outline">Registro das aulas</a></p>
				</div>
			</div>
		</div>

		<!-- Seção Configuração -->
		<div class="container">
			<hr><h4 style="text-align: center; font-family: Jazz LET, fantasy">Configuração</h4><hr>
			<div class="col-md-12">
				<div class="col-md-12 text-center">
					<p><a href="" class="btn btn-primary btn-outline">Dados cadastrais</a></p>
					<p><a href="" class="btn btn-primary btn-outline">Alterar dados cadastrais</a></p>
					<p><a href="" class="btn btn-primary btn-outline">Alterar senha</a></p>
				</div>
			</div>
		</div>

		<br>
		<hr>
		<br>

		<!-- Seção Footer -->
		<!-- JS -->
		@include('site.footerjs')
		
	</body>
</html>
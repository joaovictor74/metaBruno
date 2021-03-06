<!DOCTYPE html>
<html>
	<head>
		<title>Portal do Professor | Ciência da Computação</title>
		@include('site.head')
	</head>
	<body class="is-preload">

		<!-- Seção Cabeçalho -->
		@include('site.header')

		<!-- Seção Nav -->
		@include('site.nav')

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
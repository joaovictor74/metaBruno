<!DOCTYPE HTML>
<html>
	<head>
		<title>Portal do Professor | Ciência da Computação</title>
		@include('site.head')
	</head>
	<body class="is-preload">

		<!-- Seção Cabeçalho -->
		@include('site.header')

		<!-- Seção Nav -->
		@include ('site.nav')

		<!-- Seção Form do Portal do Aluno -->
		<div class="container" style="width: 100%; height: 100%">
			<hr><h2 style="text-align: center; font-family: Jazz LET, fantasy">Portal do Professor</h2><hr>
			<form method="">
				<div class="col-md-12">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Login" name="login">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Senha" name="senha">
							</div>
						</div>
						<div class="col-md-12 text-center">
							<div class="form-group">
								<input type="submit" value="Acessar" class="btn btn-primary">
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
			</form>
		</div>

		<br>
		<hr>
		<br>

		<!-- Seção Mural de Informações -->
		<div class="container">
			<hr><h4 style="text-align: center; font-family: Jazz LET, fantasy">Link's rápidos</h4><hr>
			<div class="col-md-12">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-left">
					<h5><a href="http://sistemas.facape.br:8080/facapePublico/actListaCursos.do" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Cursos e disciplinas</a></h5>
					<h5><a href="http://sistemas.facape.br:8080/portalaluno/horarios.do" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Horários</a></h5>
					<h5><a href="http://ead.facape.br/moodle/login/index.php" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Moodle</a></h5>
					<h5><a href="http://sistemas.facape.br:8080/mural/" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Mural de recados</a></h5>
					<h5><a href="http://sistemas.facape.br:8080/mural/paginas/login.xhtml" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Postar recados</a></h5>
					<h5><a href="http://sistemas.facape.br:8080/facapePublico/actEntidade.do?m=listaDocente" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Relação de docentes</a></h5>
					<h5><a href="http://sistemas.facape.br:8080/reservasGeral/ListaRecursos.jv" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Reserva de recursos</a></h5>
					<h5><a href="http://sistemas.facape.br:8080/siscopias/" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> Solicitação de cópias</a></h5>
					<h5><a href="http://outlook.com/facape.br" target="_blank"><i class="fa fa-plus-square" style="font-size: 20px"></i> WebMail</a></h5>
				</div>
				<div class="col-md-3"></div>
			</div>
			<br>
			<hr>
			<br>
		</div>

		<!-- Seção Footer -->
		<!-- JS -->
		@include('site.footerjs')
	</body>
</html>
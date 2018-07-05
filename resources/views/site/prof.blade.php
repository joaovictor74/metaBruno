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
		@include('site.mural')

		<!-- Seção Footer -->
		<!-- JS -->
		@include('site.footerjs')
	</body>
</html>
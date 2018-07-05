<!DOCTYPE html>
<html>
	<head>
		<title>Ciência da Computação</title>
		@include('site.head')
	</head>
	<body class="is-preload">

		<!-- Seção Cabeçalho -->
		@include('site.header')

		<!-- Seção Nav -->
		@include ('site.nav')
		<!-- Form Admin-->
		<div class="container" style="width: 100%; height: 100%">
				<hr><h2 style="text-align: center; font-family: Jazz LET, fantasy">Portal do Administrador</h2><hr>
				{!! Form::open(["route"=>'admin.login','method'=>'post']) !!}
					<div class="col-md-12">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="col-md-12">
								<div class="form-group">
										{!!Form::text('username',null,['class'=>'input form-control','placeholder'=>'Email'])!!}
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
										{!!Form::password('password',['class'=>'form-control','placeholder'=>'Senha'])!!}
								</div>
							</div>
							<div class="col-md-12 text-center">
								<div class="form-group">
										{!!Form::submit('Acessar',['class'=>'btn btn-primary'])!!}
								</div>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
					{!!Form::close()!!}
			</div>
	
			<br>
			<hr>
			<br>
		<!-- Mural -->
		@include('site.mural')
			
		<!-- Seção Footer -->
		<!-- JS -->
		@include('site.footerjs')
		
	</body>
</html>
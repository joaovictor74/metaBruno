<!DOCTYPE HTML>
<html>
	<head>
		<title>Ciência da Computação</title>
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
		@include ('site.nav')

		<!-- Seção Home -->
		<section id="banner">
			<div class="inner">
				<h1 style="font-family: Courier New, monospace">Ciência da Computação</h1>
				<p style="font-family: Courier New, monospace">A tecnologia tem o poder de transformar vidas</p>
			</div>
		</section>

		<!-- Seção Footer -->
		<!-- JS -->
		@include('site.footerjs')
		
	</body>
</html>
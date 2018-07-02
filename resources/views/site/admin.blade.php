<!DOCTYPE HTML>
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PAM Três Lagoas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">
</head>
<body>
	<div class="row" id="logo">
		<nav id="nav-color" class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="#">PAM Três Lagoas</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Home</a></li>
						<li id="menu-link-dropdown" class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Painel <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Area Restrita</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Sobre</a></li>
								<li><a href="#">Coordenadores</a></li>
								<li><a href="#">Integrantes</a></li>
								<li><a href="#">Atividades</a></li>
							</ul>
						</li>
						<li><a href="#">Fotos</a></li>
						<li><a href="#">Agenda</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="carousel-pam" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="col-xs-4 col-xs-offset-2">
						<h1 style="color: white;">PAM – 23 Anos
							<br/></<h1><h1 style="color:#ebbc11">
							“Sinergia e Sustentabilidade no Alto Tietê”.</h1>
						</div>
						<div class="col-xs-6">
							<img src="img/img1.4.png" alt="...">
						</div>

					</div>
					<div class="item">
						<div class="col-xs-4 col-xs-offset-2">
							<h1 style="color: white;">Excelência
								<br/></<h1><h1 style="color:#ebbc11">
								Nossos treinamentos são ministrados e certificados por órgãos competentes, sob coordenação Operacional do 17º GB.</h1>
							</div>
							<div class="col-xs-6">
								<img src="img/img2.1.png" alt="...">
							</div>
						</div>
						...
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-pam" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-pam" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div id="noticias" class="row">
				<div class="col-xs-12">
					<div class="col-xs-1" style="width: 12.499999995%"></div>
					<div class="col-xs-3">
						<div class="thumbnail">
						<img src="img/tumb1.jpg" alt="" class="img-responsive"><br>
							<div class="caption">
								<h3>Dia de treinamento</h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
							</div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="thumbnail">
						<img src="img/tumb2.jpg" alt="" class="img-responsive"><br>
							<div class="caption">
								<h3>Dia de treinamento</h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
							</div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="thumbnail">
						<img src="img/tumb3.jpg" alt="" class="img-responsive"><br>
							<div class="caption">
								<h3>Dia de treinamento</h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget </p>
							</div>
						</div>
					</div>
					<div class="col-xs-1" style="width: 12.499999995%"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4"></div>
				<div class="col-xs-4"></div>
				<div class="col-xs-4"></div>
			</div>
		</body>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$('.carousel').carousel()
		</script>
		</html> 

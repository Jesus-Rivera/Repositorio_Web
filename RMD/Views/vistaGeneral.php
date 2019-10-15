<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>RMD</title>
	<link href="css/bootstrap.css" rel="stylesheet" />

	<link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link href="css/ct-navbar.css" rel="stylesheet" />


	<!--     Font Awesome     -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

</head>

<body>
	<div id="navbar-full">
		<div id="navbar">
			<nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand navbar-brand-logo" href="#">
							<div class="logo">
								<img src="images/user.png" style="width: 65px;">
							</div>
							<div class="brand">Avatar: user1</div>
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
									<i class="pe-7s-search"></i>
									<p>Buscar</p>
								</a>
							</li>

							<li>
								<a href="#">
									<i class="pe-7s-mail">
										<!-- numero de mensajes -->
										<span class="label">0</span>
									</i>
									<p>Mensajes</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="pe-7s-user"></i>
									<p>Configuración<b class="caret"></b></p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Perfil</a></li>
									<li class="divider"></li>
									<li><a href="#">Cerrar Sesión</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-form navbar-right navbar-search-form" role="search">
							<div class="form-group">
								<input type="text" value="" class="form-control" placeholder="Search...">
							</div>
						</form>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<div class="blurred-container">
				<div class="img-src" style="background-image: url('images/bg.jpg')"></div>
			</div>
		</div><!--  fin navbar -->
	</div> <!-- fin del menu -->

	<section id="mas-visto" style="padding-top: 110px;">
		<div class="container-fluid">
			<h1 class="text-center my-3">MAS VISTOS</h1>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner row w-100 mx-auto">
					<div class="carousel-item col-md-4 active">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Card 1</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is
									a little bit longer.</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item col-md-4">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Card 2</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is
									a little bit longer.</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item col-md-4">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Card 3</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is
									a little bit longer.</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item col-md-4">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Card 4</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is
									a little bit longer.</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item col-md-4">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Card 5</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is
									a little bit longer.</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item col-md-4">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Card 6</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is
									a little bit longer.</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item col-md-4">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Card 7</h4>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is
									a little bit longer.</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12 text-center mt-4">
							<a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
								<i class="fa fa-lg fa-chevron-left"></i>
							</a>
							<a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
								<i class="fa fa-lg fa-chevron-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/ct-navbar.js"></script>

</body>

</html>
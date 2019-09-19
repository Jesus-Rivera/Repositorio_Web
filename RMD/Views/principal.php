<!doctype html>
<html lang="es">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
<title>Repositorio</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<div class="container">
    <a class="navbar-brand" href="#">RMD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#inicio">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#material">Material</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#profesores">Profesores</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#inicioSesion">Iniciar sesion</a>
            </li>
        </ul>
    </div>
</div>
</nav>
</header>
<div class="jumbotron jumbotron-fluid height100p banner" id="inicio">
    <div class="container h100">
        <div class="contentBox h100">
            <div>
                <h1>RMD</h1>
                <p>
                    Bienvenido al Repositorio de Material Didáctico
                </p>
            </div>
        </div>
    </div>
</div>
<!-- primera seccion Material -->
<section class="sec1" id="material">
<div class="container">
    <div class="row">
        <div class="offset-sm-2 col-sm-8">
            <div class="headerText text-center">
                <h2>Material</h2>
                <p>
                    <span>En RMD encontraras medios de apoyo en diversos formatos como son PDF, WORD.</span>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="placeBox">
                <div class="imgBx">
                    <img src="img/web.jpg">
                </div>
                <div class="content">
                    <h3><span>Tecnologias para la Web</span></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="placeBox">
                <div class="imgBx">
                    <img src="img/ia.jpg">
                </div>
                <div class="content">
                    <h3><span>Inteligencia Artificial</span></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="placeBox">
                <div class="imgBx">
                    <img src="img/base-de-datos.jpg">
                </div>
                <div class="content">
                    <h3><span>Base de Datos</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- seccion 2 (se muestra el perfil de los profesores) -->
<section class="sec2" id="profesores">
<div class="container h100">
    <div class="contentBox h100">
        <div>
            <h1>Profesores</h1>
            <p>
                Nuestros profesores cuentan experiencia en el área
            </p>
            <a href="#" class="btn btnD1">ver mas</a>
        </div>
    </div>
</div>
</section>
<section class="formulario" id="inicioSesion">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row clearfix">
                <div class="offset-sm-2 col-sm-8">
                    <form action="" method="get" accept-charset="utf-8">
                        <div class="form-row">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" required>
                                
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" class="form-control" id="apellido" placeholder="Introduce tus apellidos" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="correo">Correo electrónico</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" id="correo" placeholder="correo electrónico" required>
                                    </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="usuario">Nombre de usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="usuario">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="usuario" placeholder="usuario" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" id="ciudad" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="estado">Estado</label>
                                    <input type="text" class="form-control" id="estado" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btnD1" type="submit">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<footer>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="sci">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <p class="cpryt">
                 © Copyright 2019 RMD
            </p>
        </div>
    </div>
</div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
        $(document).scroll(function(){
            $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
        });
    </script>
</body>
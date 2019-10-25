<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>RMD</title>

	<!--
	<link href="<?=URL?>Resources/css/bootstrap.css" rel="stylesheet" />

	<link href="<?=URL?>Resources/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link href="<?=URL?>Resources/css/navbarInicioSesion.css" rel="stylesheet" />
	<link href="<?=URL?>Resources/css/ct-navbar.css" rel="stylesheet" /> -->


	<!--     Font Awesome     -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

	<!-- icono -->
    <link rel="shorcut icon" type="<?=URL?>Resources/img/logo.png" href="<?=URL?>Resources/img/logo.png">
</head>

<body>
<?php
	
	echo '<a href="'.URL.'principal'.'"><img src="'.URL.'Resources/img/usuario/'.Direccion.'" style="width: 80px;"></a>';
	echo "<br>";
	echo "Bienvenido ".Nombre." ".Apellido."<br>";
	echo constant('Usuario');
	echo "<br>";
	echo '<input type="text"><br>';
?>
<?php
	switch (Tipo_Usuario) {
	 	case 'alumno':
	 		echo "<a href='".URL."principal/posts"."'>Mensajes</a><br>";
	 		echo "<a href='".URL."principal/profile"."'>Perfil</a><br>";
	 		echo "<a href='".URL."principal/sing_off"."'>Cerrar sesion</a> <br>";
	 	break;

	 	case 'profesor':
	 		echo "<a href='".URL."principal/posts"."'>Mensajes</a><br>";
	 		echo "<a href='".URL."principal/materials"."'>Material</a><br>";
	 		echo "<a href='".URL."principal/profile"."'>Perfil</a><br>";
	 		echo "<a href='".URL."principal/sing_off"."'>Cerrar sesion</a> <br>";
	 	break;
	 	
	 	case 'coordinador':
	 		echo "<a href='".URL."principal/posts"."'>Mensajes</a><br>";
	 		echo "<a href='".URL."principal/materials"."'>Material</a><br>";
	 		echo "<a href='".URL."principal/check"."'>Control</a><br>";
	 		echo "<a href='".URL."principal/profile"."'>Perfil</a><br>";
	 		echo "<a href='".URL."principal/sing_off"."'>Cerrar sesion</a> <br>";
	 	break;
	 }
?>
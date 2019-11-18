<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RMD</title>
	<link rel="stylesheet" href="<?=URL?>Resources/css/normalize.css">
	<link rel="stylesheet" href="<?=URL?>Resources/css/sweetalert2.css">
	<link rel="stylesheet" href="<?=URL?>Resources/css/material.min.css">
	<link rel="stylesheet" href="<?=URL?>Resources/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?=URL?>Resources/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?=URL?>Resources/css/mensaje.css">
    <link rel="shorcut icon" type="<?=URL?>Resources/img/logo.png" href="<?=URL?>Resources/img/logo.png">
	<link rel="stylesheet" href="<?=URL?>Resources/css/mi_main.css">
	<link rel="stylesheet" href="<?=URL?>Resources/css/editPerfil.css">
	<link rel="stylesheet" href="<?=URL?>Resources/css/profileStyle.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/styleVistaArchivo.css">
	<script src="https://kit.fontawesome.com/f8b2926d66.js" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?=URL?>/Resources/js/jquery-1.11.2.min.js"><\/script>')</script>
	
	<script src="<?=URL?>Resources/js/material.min.js"></script>
	<script src="<?=URL?>Resources/js/sweetalert2.min.js"></script>
	<script src="<?=URL?>Resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?=URL?>Resources/js/main.js"></script>
	<script src="<?=URL?>Resources/js/peticion.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
</head>

<body>
	<!-- 
		seccion de notificaciones 
		aquie se le mostrara al usuario las notificaciones que se han realizado, por ejemplo
		si se ha subido algún archivo nuevo, si tiene algún mensaje nuevo
	-->
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
		<section class="NotificationArea">
			<div class="full-width text-center NotificationArea-title tittles">Notificaciones<i
					class="zmdi zmdi-close btn-Notification"></i></div>
			<a href="#" class="Notification" id="notifation-unread-1">
				<div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle"></i>
						<strong>Nuevo registro de usuario</strong>
						<br>
						<small>Just Now</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notificación no leída</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-1">
				<div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>New Updates</strong>
						<br>
						<small>30 Mins Ago</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notificación leída</div>
			</a>
			<a href="#" class="Notification" id="notifation-unread-2">
				<div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle"></i>
						<strong>Archive uploaded</strong>
						<br>
						<small>31 Mins Ago</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notification as UnRead</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-2">
				<div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>New Mail</strong>
						<br>
						<small>37 Mins Ago</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notification as Read</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-3">
				<div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Folder delete</strong>
						<br>
						<small>1 hours Ago</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notification as Read</div>
			</a>
		</section>
	</section>
	<!-- navBar -->
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						<!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
						<div class="mdl-tooltip" for="notifications">Notificaciones</div>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Salir</div>
					</li>
					<li class="text-condensedLight noLink"><small><?=Usuario?></small></li>
					<li class="noLink">
						<figure>
							<img src="<?=URL.'Resources/img/usuario/'.Direccion?>" alt="Avatar" class="img-responsive" style="border: none;">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> RMD
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">
					<img src="<?=URL.'Resources/img/usuario/'.Direccion?>" alt="Avatar" class="img-responsive">
				</div>
				<figcaption class="navLateral-body-cr hide-on-tablet">
					<span>
						<?=Nombre." ".Apellido?><br>
						<small><?=Tipo_Usuario?></small>
					</span>
				</figcaption>
			</figure>
			<div class="full-width tittles navLateral-body-tittle-menu">
				<i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; Repositorio de Material
					Didáctico</span>
			</div>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="<?=URL."principal/index"?>" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								INICIO
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-case"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								ADMINISTRACIÓN
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="<?=URL."material/profile?id=".$_SESSION['ID']?>" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Perfil
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?=URL."administracion/posts"?>" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-mail-send"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Mensajes
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?=URL."administracion/saves"?>" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-widgets"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Material guardado
									</div>
								</a>
							</li>
						</ul>
					</li>
					<?php
					if (!strcmp(Tipo_Usuario,"Alumno") == 0) {
						if (!strcmp(Tipo_Usuario,"Profesor") == 0) {
						echo '<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-account-add zmdi-hc-fw"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								REGISTRO DE USUARIOS
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a><ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="'.URL."registro/coordinador".'" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-face zmdi-hc-fw"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										NUEVO COORDINADOR
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="'.URL."registro/profesor".'" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										NUEVO PROFESOR
									</div>
								</a>
							</li>
						</ul>
					</li>';}
					echo '<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								MATERIAL
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="'.URL."registro/archivo".'" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-book"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										NUEVO MATERIAL
									</div>
								</a>
							</li>';
							if (!strcmp(Tipo_Usuario,"Profesor") == 0) {
							echo '<li class="full-width">
								<a href="'.URL."principal/materials".'" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										CATALOGO
									</div>
								</a>
							</li>
						';
							}
							echo "</ul>
					</li>";
					}
					 ?>
					<li class="full-width divider-menu-h"></li>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
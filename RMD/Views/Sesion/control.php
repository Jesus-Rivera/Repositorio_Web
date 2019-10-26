<?php 
	foreach (Usuarios_Reg as $value) {
		echo "<br><br>";
		echo "<br>";
		echo $value[0]." ".$value[1];
		echo "<br>";
		echo $value[2];
	}

 ?>


 <div class="container-fluid">
            <div class="page-header">
              <h1 class="all-tittles"><small>Control de usuarios</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?=URL.'Resources/img/usuario/'.Direccion?>" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos administradores del sistema, debes de llenar todos los campos del siguiente formulario para registrar un administrador
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo administrador</li>
                      <li><a href="listadmin.html">Listado de administradores</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo administrador</div>
                <form autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre completo" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del administrador">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre completo</label>
                            </div>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general input-check-user" placeholder="Nombre de usuario" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" data-toggle="tooltip" data-placement="top" title="Escribe un nombre de usuario sin espacios, que servira para iniciar sesión">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de usuario</label>
                           </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" placeholder="E-mail"  maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Email del administrador">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                           <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Repite la contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Repetir contraseña</label>
                           </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>
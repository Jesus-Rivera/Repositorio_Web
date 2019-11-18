<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="<?=URL?>Resources/css/formulario.css">
    <link rel="shorcut icon" type="<?=URL?>Resources/img/logo.png" href="<?=URL?>Resources/img/logo.png">
</head>

<body>
    <!-- formulario -->
    <!-- 
        registrarse
        nombre
        apellido
        usuario
        contraseña
        correo
        
        inisio de sesion
        usuario
        contraseña
     -->

     <div class="cod-container">
        <div class="form-header">
            <img src="<?=URL?>Resources/img/logo.png">
            <h1>RMD</h1>
        </div>

        <div class="form-content">
            <form action="<?=URL?>formulario/getUser" method="POST" class="cod-form">
                <div class="form-title">
                    <h3>Iniciar Sesión</h3>
                </div>

                <div class="input-group">
                    <input type="email" class="form-input" name="correo" id="correo">
                    <label class="label" for="correo">Correo</label>
                </div>

                <div class="input-group">
                    <input type="password" class="form-input" name="pass" id="pass">
                    <label class="label" for="pass">Contraseña</label>
                </div>

                <?php
                    if (isset($_GET['ERROR'])) {
                         echo '<div class="input-group">
                            <label style="color: red;">Datos erroneos</label>
                        </div>';
                    }
                ?>

                <div class="input-group">
                    <input type="submit" class="form-input" value="Iniciar Sesión">
                    <p>No tienes cuenta? <a href="#" class="alt-form">Ingresa aquí</a></p>
                </div>
               
            </form>
        </div>

        
        <div class="form-content">
            <form action="<?=URL?>formulario/createUser" method="POST" class="cod-form">
                <div class="form-title">
                    <h3>Regístrate Gratis</h3>
                </div>

                <div class="input-group">
                    <input type="text" class="form-input" name="reg-nombre" id="reg-nombre">
                    <label class="label" for="reg-nombre">Nombre</label>
                </div>
                <div class="input-group">
                    <input type="text" class="form-input" name="reg-apellido" id="reg-apellido">
                    <label class="label" for="reg-apellido">Apellido</label>
                </div>

                <div class="input-group">
                    <input type="email" class="form-input" name="reg-correo" id="reg-correo">
                    <label class="label" for="reg-correo">Correo</label>
                </div>

                <div class="input-group">
                    <input type="password" class="form-input" name="reg-pass" id="reg-pass">
                    <label class="label" for="reg-pass">Contraseña</label>
                </div>
                <div class="input-group">
                    <input type="radio" name="gender" value="Male">Hombre<br>
                    <input type="radio" name="gender" value="Female">Mujer<br>
                </div>
                <div class="input-group">
                    <input type="submit" class="form-input" value="Registrate">
                    <p>Ya tienes cuenta? <a href="#" class="alt-form">Ingresa aquí</a></p>
                </div>
               
            </form>
        </div>
    </div>

    <script src="<?=URL?>Resources/js/jquery-3.3.1.min.js"></script>
    <script src="<?=URL?>Resources/js/form.js"></script>
    
</body>

</html>
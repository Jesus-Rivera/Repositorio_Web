
	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect"></div>
		<div class="login-box">
		  <div class="container avatar">
			<div class="avatar-upload">
			  <div class="avatar-edit">
				<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
				<label for="imageUpload"></label>
			  </div>
			  <div class="avatar-preview">
				<?php 
					$fotografia = "ficheros/usuarios/".InfP[10]."/".$_SESSION['ID']."/".$_SESSION['ID'].".jpg";
					if (file_exists($fotografia)) {
						$dir = "../".$fotografia;
					} else {
						$dir = URL.'Resources/img/usuario/'.Direccion_picture;
					}
					echo '<div id="imagePreview" style="background-image: url('."'".$dir."'".');">';
				?>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- <img src="img/logo.png" class="avatar" alt="Avatar Image"> -->
		  <h1>Editar Perfil</h1>
		  <form action="<?=URL."material/save_profile"?>" method="POST">
		  	<input type="submit" value="Guardar">
			<!-- NUEVO NOMBRE -->
			<label for="username">Nombre</label>
			<input type="text" placeholder="Ingrese su nombre" name="name" id="name">
			<!-- NUEVO Apellido -->
			<label for="username">Apellido</label>
			<input type="text" placeholder="Ingrese su apellido" name="lastname" id="lastname">
			<!-- NUEVO usuario -->
			<label for="username">Usuario</label>
			<input type="text" placeholder="Ingrese su usuario" name="user" id="user">
			<!-- NUEVO EMAIL -->
			<label for="username">Email</label>
			<input type="email" placeholder="Ingrese su email" name="email" id="email">
			<!-- NUEVO telefono -->
			<label for="username">Telefono</label>
			<input type="text" placeholder="Ingrese su telefono" name="phone" id="phone">
			<!-- NUEVO fecha de nacimienito -->
			<label for="username">Fecha de nacimiento</label>
			<input type="date" name="birthday">
			<!-- NUEVO pais -->
			<label for="username">País</label>
			<input type="text" placeholder="Ingrese su pais" name="country" id="country">
			<!-- NUEVO estado -->
			<label for="username">Estado</label>
			<input type="text" placeholder="Ingrese su estado" name="state" id="state">
			<!-- NUEVO ciudad -->
			<label for="username">Ciudad</label>
			<input type="text" placeholder="Ingrese su ciudad" name="city" id="city">
			<!-- CONTRASEÑA ACTUAL -->
			<label for="password">Contraseña
			<?php
			if (isset($_GET['Error'])) {
				echo '<span style="color: red; size: 5px;"> incorrecta</span>';
			}
			?>
			</label>
			<input type="password" placeholder="Ingrese su contraseña" name="password">
			<!-- CONTRASEÑA NUEVA -->
			<label for="password">Nueva contraseña</label>
			<input type="password" placeholder="Ingrese su nueva contraseña" name="new_password">
			
		  </form>
		</div>
	</div>

	<script>

			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function (e) {
						$('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
						$('#imagePreview').hide();
						$('#imagePreview').fadeIn(650);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
			$("#imageUpload").change(function () {
				readURL(this);
			});
	
		</script>
<script>
	var inf = eval(<?=Informacion?>);
	document.getElementById('name').value = inf[0];
	document.getElementById('lastname').value = inf[1];
	document.getElementById('user').value = inf[2];
	document.getElementById('email').value = inf[3];
	document.getElementById('phone').value = inf[4];
	document.getElementById('birthday').value = inf[12];
	document.getElementById('country').value = inf[6];
	document.getElementById('state').value = inf[7];
	document.getElementById('city').value = inf[8];

</script>
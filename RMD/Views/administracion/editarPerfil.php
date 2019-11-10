<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RMD</title>
	<link rel="stylesheet" href="<?=URL?>Resources/css/editePerfil.css">
	<script src="https://kit.fontawesome.com/f8b2926d66.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>

	<div class="edite-box">
		<div class="container avatar">
			<div class="avatar-upload">
				<div class="avatar-edit">
					<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
					<label for="imageUpload"></label>
				</div>
				<div class="avatar-preview">
					<div id="imagePreview" style="background-image: url('<?=URL?>Resources/img/2a.jpg');"></div>
				</div>
			</div>
		</div>
		<!-- <img src="img/logo.png" class="avatar" alt="Avatar Image"> -->
		<h1>Editar Perfil</h1>
		<form>
			<!-- NUEVO NOMBRE -->
			<label for="username">Nombre</label>
			<input type="text" placeholder="Ingrese su nombre">
			<!-- NUEVO EMAIL -->
			<label for="username">Email</label>
			<input type="email" placeholder="Ingrese su email">
			<!-- CONTRASEÑA ACTUAL -->
			<label for="password">Contraseña</label>
			<input type="password" placeholder="Ingrese su contraseña">
			<!-- CONTRASEÑA NUEVA -->
			<label for="password">Nueva contraseña</label>
			<input type="password" placeholder="Ingrese su nueva contraseña">
			<input type="submit" value="Guardar">
		</form>
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
</body>

</html>
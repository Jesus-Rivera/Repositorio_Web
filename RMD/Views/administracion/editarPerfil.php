		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
						<div class="login-box">
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
				</div>
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
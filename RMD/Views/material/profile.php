
	<div class="card-container">
		<?php 
		$fotografia = "ficheros/usuarios/".InfP[10]."/".$_GET['id']."/".$_GET['id'].".jpg";
			if (file_exists($fotografia)) {
			    echo '<img class="round" src="../'.$fotografia.'" alt="user" />';
			} else {
			    echo '<img class="round" src="'.URL.'Resources/img/usuario/'.Direccion_picture.'" alt="user" />';
			}
		?>
		<h3 id="name"></h3>
		<h6 id="country"></h6>
		<p><span id="state"></span><span> </span><span id="city"></span></p>
		<div class="buttons">
			<?php
				if (!isset($_SESSION['ID']) == 0) {
					if ($_SESSION['ID'] == $_GET['id']) {
						echo '<a href="'.URL."material/edit_profile".'">
						<button class="primary">
							Editar
						</button>
						</a>';
					}else{
						echo '<a href="'.URL."administracion/new?user=".InfP[2].'">
						<button class="primary">
							Mensaje
						</button>
						</a>';
					}
				}
			?>
		</div>

		<div class="skills">
			<h6>Informacion</h6>
			<ul>
				<li><b>Edad: </b><span  id="age"></span></li>
				<li><b>Puesto: </b><span  id="tipo_usuario"></span></li>
				<li><b>Usuario: </b><span  id="user"></span></li>
				<?php
					if (strcmp(InfP[10],"Coordinador") == 0 || strcmp(InfP[10],"Profesor") == 0) {
						echo '<li><b>Escuela: </b><span  id="school"></span></li>';
					}
				?>
				<li><b>Telefono: </b><span  id="phone"></span></li>
				<li><b>Email: </b><span  id="email"></span></li>
			</ul>
		</div>
	</div>
<script>
	var inf = eval(<?=Informacion?>);
	document.getElementById('name').innerHTML = inf[0].concat(" ",inf[1]);
	document.getElementById('user').innerHTML = inf[2];
	document.getElementById('email').innerHTML = inf[3];
	document.getElementById('phone').innerHTML = inf[4];
	document.getElementById('age').innerHTML = inf[5];
	document.getElementById('country').innerHTML = inf[6];
	document.getElementById('state').innerHTML = inf[7];
	document.getElementById('city').innerHTML = inf[8];
	document.getElementById('tipo_usuario').innerHTML = inf[10];
	document.getElementById('school').innerHTML = inf[11];
</script>
</script>
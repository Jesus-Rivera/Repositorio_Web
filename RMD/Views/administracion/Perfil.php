Perfil
<h2>Nombre: </h2><h4 id = 'name'></h4>
<h2>Usuario: </h2><h4 id = 'user'></h4>
<h2>Correo: </h2><h4 id = 'email'></h4>
<h2>Edad: </h2><h4 id = 'age'></h4>
<h2>Telefono: </h2><h4 id = 'phone'></h4>
<h2>Pais: </h2><h4 id = 'country'></h4>
<h2>Estado: </h2><h4 id = 'state'></h4>
<h2>Ciudad: </h2><h4 id = 'city'></h4>
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
</script>
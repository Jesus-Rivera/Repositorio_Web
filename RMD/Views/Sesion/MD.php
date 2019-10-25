<?php 
	foreach (Material as $value) {
		echo "<br><br>";
		echo "<br>";
		echo $value[0];
		echo "<br>";
		echo $value[1];
		echo "<br>";
		echo $value[2];
	}

 ?>

 <script>
	function ajax() {
		const http = new XMLHttpRequest();
		const url = '';
		http.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200)
			{
				//Carga
			}
		}
		http.open("GET",url);
		http.send();
	}

	document.getElementById("boton").addEventListener("click",function(){
		ajax();
	});
</script>
function elementos(lista)
{
	//var lista = eval(lista);
	//document.getElementById(coordinadores).innerHTML = "Se presiono LISTA";
	alert("Prueba");
}

$(obtener_registros());

function obtener_registros(cadena)
{
	/*$.ajax({
		url : 'consulta',
		type : 'POST',
		dataType : 'html',
		data : { material: cadena },
		})

	.done(function(resultado){
		$("#resultados").html(resultado);
	})*/
}

$(document).on('keyup', '#searchClient', 
	function() 
	{
		var valorBusqueda = $(this).val();
		
		if (valorBusqueda != "")
		{
			document.getElementById('coordinadores').innerHTML = valorBusqueda;
			obtener_registros(valorBusqueda);
		}
		else
		{
			document.getElementById('coordinadores').innerHTML = "Hola mundo";
			obtener_registros();
		}
});

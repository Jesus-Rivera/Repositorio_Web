$(obtener_registros());

function obtener_registros(cadena)
{
	$.ajax({
		url : 'consulta',
		type : 'POST',
		dataType : 'html',
		data : { material: cadena },
		})

	.done(function(resultado){
		$("#resultados").html(resultado);
	})
}

$(document).on('keyup', '#searchProduct', 
	function() 
	{
		var valorBusqueda = $(this).val();
		
		if (valorBusqueda != "")
		{
			document.getElementById('resultados').innerHTML = valorBusqueda;
			obtener_registros(valorBusqueda);
		}
		else
		{
			document.getElementById('resultados').innerHTML = "Hola mundo";
			obtener_registros();
		}
});

<?php
	/**
	* Clase app, se encarga de crear
	* la clase que administrar todos los
	* controladores necesarios
	* @author Jesus Rivera 
	**/
	class App
	{
		/**
		* Constructor de la clase
		**/	
		function __construct()
		{
			if (isset($_GET['url'])) {
				$url = $_GET['url'];
				$url = rtrim($url,'/');
				$url = explode('/', $url);
			}else{
				$url = array(0 => "main" );
			}
			$direccion = "Controllers/".$url[0].".php";
			if (file_exists($direccion)) {
				require_once($direccion);
				$controlador = new $url[0];

				if (isset($url[1])) {
					if(function_exists($url[1]))
					{
						$controlador->{$url[1]}();
					}
				}
			}
			else
			{
				require_once "Controllers/errores.php";
				$controlador = new Errores();
			}
		}
	}

?>
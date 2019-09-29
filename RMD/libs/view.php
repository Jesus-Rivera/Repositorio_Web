<?php 
	/**
	* Clase view, se encarga de crear
	* y controlar las vistas
	* @author Jesus Rivera 
	**/
	class View
	{
		/**
		* Metodo load
		* carga una vista en un controlador
		* @param nombre vista que se cargara
		**/	
		function load($nombre)
		{
			require 'Views/'.$nombre;
		}
	}

 ?>
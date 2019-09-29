<?php 
	/**
	* Clase controller, se encarga de crear
	* los metodos que heredaran todos 
	* los controladores
	* @author Jesus Rivera 
	**/
	class Controller
	{
		/**
		* Constructor de la clase
		**/	
		function __construct()
		{
			$this->view = new View();
		}

	}

 ?>
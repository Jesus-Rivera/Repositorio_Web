<?php 

	/**
	 * Clase que genera la vista principal
	 * @author Jesus Rivera
	**/
	class Main extends Controller
	{
		/**
		* Constructor de la clase
		**/	
		function __construct()
		{
			parent::__construct();
		}

		/**
		 * Funcion que carga las vista principal
		**/
		function index()
		{
			$this->view->load("Inicio/header.php");
			$this->view->load("Inicio/principal.php");
			$this->view->load("Inicio/footer.php");
		}
	}
?>
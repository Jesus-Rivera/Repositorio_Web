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
			$this->view->load("header.php");
			$this->view->load("principal.php");
			$this->view->load("footer.php");
		}
	}
?>
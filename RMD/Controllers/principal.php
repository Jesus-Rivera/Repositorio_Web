<?php 

	/**
	 * Clase que genera la vista principal con la sesion iniciada
	 * @author Jesus Rivera
	**/
	class Principal extends Controller
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

			$this->view->load("principal/header.php"); 
			$this->view->load("principal/vistaGeneral.php");
			$this->view->load("footer.php");
		}
	}
?>
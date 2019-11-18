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
			session_start(); 
		}

		/**
		 * Metodo que carga las vista principal
		**/
		function index()
		{
			$this->view->load("Inicio/header.php");
			$aux = array();
			foreach( First_users as $value) {
				$tipo = ((integer)((string)$value)[0] == 2) ? "Coordinador":"Profesor";
				array_push($aux,$this->model->get_inf($value,$tipo));
			}
			define("users",$aux);
			$this->view->load("Inicio/principal.php");
			$this->view->load("Inicio/footer.php");
		}
	}
?>
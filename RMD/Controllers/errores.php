<?php 
	/**
	* Clase errores, se encarga de crear
	* la vista y metodos que se mostraran
	* cada que ocurra un error en la pagina
	* @author Jesus Rivera 
	**/
	class Errores extends Controller
	{
		/**
		* Constructor de la clase
		**/	
		function __construct()
		{
			parent::__construct();
			$this->view->load("header.php");
			$this->view->load("error.php");
			$this->view->load("footer.php");
		}
	}
?>
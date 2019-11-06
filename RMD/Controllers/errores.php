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
		 * carga las vistas de la pagina de error 
		**/	
		function __construct()
		{
			parent::__construct();
			$this->view->load("Inicio/header.php");
			$this->view->load("error.php");
			$this->view->load("Inicio/footer.php");
		}
	}
?>
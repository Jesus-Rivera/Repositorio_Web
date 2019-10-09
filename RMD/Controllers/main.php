<?php 

	/**
	 * 
	 */
	class Main extends Controller
	{
		/**
		* Constructor de la clase
		**/	
		function __construct()
		{
			parent::__construct();
			$this->view->load("header.php");
			$this->view->load("principal.php");
			$this->view->load("footer.php");
		}

		function Profesores()
		{
			$this->view->load("header.php");
			
			//$this->view->load("profesores.php");
			

			$this->view->load("footer.php");
		}
	}
?>
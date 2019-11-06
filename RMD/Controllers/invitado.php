<?php 

	/**
	 * 
	 */
	class Invitado extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function Database()
		{
			define("Descripcion","Las bases de datos son un elemento fundamental en el entorno informático hoy en día y tienen aplicación en la práctica totalidad de campos. Concebidas con un propósito general, son de utilidad para toda disciplina o área de aplicación en la que exista una necesidad de gestionar datos, tanto más cuanto más voluminosos sean estos. ");
			define("Icono","fas fa-database");
			define("Categoria","BASE DE DATOS");
			define("catalogo",$this->model->material_invitado(Categoria));
			$this->view->load("invitado/header_invitado.php");
			$this->view->load("invitado/invitado.php");
			$this->view->load("invitado/footer_invitado.php");
		}

		public function IA()
		{
			define("Descripcion","Las bases de datos son un elemento fundamental en el entorno informático hoy en día y tienen aplicación en la práctica totalidad de campos. Concebidas con un propósito general, son de utilidad para toda disciplina o área de aplicación en la que exista una necesidad de gestionar datos, tanto más cuanto más voluminosos sean estos. ");
			define("Icono","fas fa-brain");
			define("Categoria","INTELIGENCIA ARTIFICIAL");
			define("catalogo",$this->model->material_invitado(Categoria));
			$this->view->load("invitado/header_invitado.php");
			$this->view->load("invitado/invitado.php");
			$this->view->load("invitado/footer_invitado.php");
		}

		public function Android()
		{
			define("Descripcion","Las bases de datos son un elemento fundamental en el entorno informático hoy en día y tienen aplicación en la práctica totalidad de campos. Concebidas con un propósito general, son de utilidad para toda disciplina o área de aplicación en la que exista una necesidad de gestionar datos, tanto más cuanto más voluminosos sean estos. ");
			define("Icono","fab fa-android");
			define("Categoria","APLICACIONES MÓVILES");
			define("catalogo",$this->model->material_invitado(Categoria));
			$this->view->load("invitado/header_invitado.php");
			$this->view->load("invitado/invitado.php");
			$this->view->load("invitado/footer_invitado.php");
		}

		public function Web()
		{
			define("Descripcion","Las bases de datos son un elemento fundamental en el entorno informático hoy en día y tienen aplicación en la práctica totalidad de campos. Concebidas con un propósito general, son de utilidad para toda disciplina o área de aplicación en la que exista una necesidad de gestionar datos, tanto más cuanto más voluminosos sean estos. ");
			define("Icono","fab fa-html5");
			define("Categoria","APLICACIONES WEB");
			define("catalogo",$this->model->material_invitado(Categoria));
			$this->view->load("invitado/header_invitado.php");
			$this->view->load("invitado/invitado.php");
			$this->view->load("invitado/footer_invitado.php");
		}
	}
 ?>
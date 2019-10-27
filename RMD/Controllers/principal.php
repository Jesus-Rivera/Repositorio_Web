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
			$this->loadModel("principal");
			session_start(); 
			if (!isset($_SESSION['ID'])) {
				header('Location: '.URL."main");
			}
			$datos = $this->model->get_datos($_SESSION['ID']);
			define('Nombre',$datos["Nombre"]); 
			define('Apellido',$datos["Apellido"]);
			define('Usuario', $datos["Usuario"]);
			define('Genero',$datos["Genero"]);
			define('Tipo_Usuario',$datos[4]);

			$direccion = constant('Tipo_Usuario');
			if (strcmp(constant('Genero'),"Male") == 0) {
				define('Direccion',$direccion."_H.png");
			}else {
				define('Direccion',$direccion."_M.png");
			}
			define("Valores",$this->model->get_registros());
		}

		/**
		 * Funcion que carga las vista principal, junto con todos
		 * los datos necesarios para esta
		**/
		public function index()
		{
			$this->view->load("Sesion/header_sesion.php");
			if (!strcmp(Tipo_Usuario,"Alumno") == 0 && !strcmp(Tipo_Usuario,"Profesor") == 0 ) {
				$this->view->load("Sesion/principal_sesion.php");
			}else{
				$this->view->load("Sesion/MD.php");
			}
			$this->view->load("Sesion/footer_sesion.php");
		}

		public function sing_off()
		{
			session_destroy();
			header('Location: '.URL."main");
		}

		public function posts()
		{
			$this->view->load("Sesion/header_sesion.php");
			$datos= $this->model->get_mensajes($_SESSION['ID']);
			define('mensajes_recibido',$datos[0]);
			define('mensaje_enviado',$datos[1]);
			$this->view->load("Sesion/mensajes/mensajes_sesion.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		public function profile()
		{
			$this->view->load("Sesion/header_sesion.php");
			define('Informacion',$this->model->get_inf($_SESSION['ID']));
			$this->view->load("Sesion/profile.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		public function materials()
		{
			//"SELECT * FROM archivo ORDER BY archivo.idArchivo DESC LIMIT 6"
			$this->view->load("Sesion/header_sesion.php");
			$this->view->load("Sesion/MD.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		public function new()
		{
			$this->view->load("Sesion/header_sesion.php");
			$this->view->load("Sesion/redactar.php");
			$this->view->load("Sesion/footer_sesion.php");
		}
	}
?>
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
				define("catalogo",$this->model->material_rand(9));
				$this->view->load("Sesion/MD.php");
			}
			$this->view->load("Sesion/footer_sesion.php");
		}

		public function sing_off()
		{
			session_destroy();
			header('Location: '.URL."main");
		}

		public function materials()
		{
			//"SELECT * FROM archivo ORDER BY archivo.idArchivo DESC LIMIT 6"
			$this->view->load("Sesion/header_sesion.php");
			define("catalogo",$this->model->material_rand(9));
			$this->view->load("Sesion/MD.php");
			$this->view->load("Sesion/footer_sesion.php");
		}


		public function consulta()
		{
			echo 'prueba';
			if(isset($_POST['material']))
			{
				echo $_POST['material'];
				echo "string";
				/*$q=$conexion->real_escape_string($_POST['alumnos']);
				$query="SELECT * FROM alumnos WHERE 
					id_alumno LIKE '%".$q."%' OR
					nombre LIKE '%".$q."%' OR
					carrera LIKE '%".$q."%' OR
					grupo LIKE '%".$q."%' OR
					fecha_ingreso LIKE '%".$q."%'";*/
			}else{echo "ppp";}
		}
	}
?>
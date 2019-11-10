<?php 
	/**
	 * 
	 */
	class Material extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->loadModel("material");
			session_start();
			
			$datos = $this->model->get_datos($_SESSION['ID']);
			define('Nombre',$datos["Nombre"]); 
			define('Apellido',$datos["Apellido"]);
			define('Usuario', $datos["Usuario"]);
			define('Genero',$datos["Genero"]);
			define('Tipo_Usuario',$datos[4]);
			define('Path',URL."ficheros/usuarios/".Tipo_Usuario."/".$_SESSION['ID']."/");
			$direccion = constant('Tipo_Usuario');
			if (strcmp(constant('Genero'),"Male") == 0) {
				define('Direccion',$direccion."_H.png");
			}else {
				define('Direccion',$direccion."_M.png");
			}
		}

		public function view()
		{
			$this->view->load("Sesion/header_sesion.php");
			echo "Prueba";
			$this->view->load("Sesion/footer_sesion.php");
		}

	}

?>
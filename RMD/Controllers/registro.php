<?php 
	/**
	 * 
	 */
	class Registro extends Controller
	{
		/**
		* Constructor de la clase
		* genera los datos de la sesion iniciada, en caso de no existir
		* redirige al main
		**/	
		function __construct()
		{
			parent::__construct();
			$this->loadModel("registro");
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
			define('Path',URL."ficheros/usuarios/".Tipo_Usuario."/".$_SESSION['ID']."/");
			$direccion = constant('Tipo_Usuario');
			if (strcmp(constant('Genero'),"Male") == 0) {
				define('Direccion',$direccion."_H.png");
			}else {
				define('Direccion',$direccion."_M.png");
			}
		}


		/**
		 * Funcion que regresa a la vista principal
		**/
		public function index()
		{
			header('Location: '.URL."principal");
		}

		/**
		* Metodo que muestra todos los profesores registrados por un profesor,
		* y genera vista para registrar un nuevo profesor
		**/
		public function profesor()
		{
			$this->view->load("Sesion/header_sesion.php");
			define("Registros",$this->model->get_registro_profesor($_SESSION['ID']));
			$this->view->load("registros/profesor.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		/**
		* Metodo que muestra todos los profesores registrados por un coordinador,
		* y genera vista para registrar un nuevo coordinador
		**/
		public function coordinador()
		{
			$this->view->load("Sesion/header_sesion.php");
			define("Registros",$this->model->get_registro_coordinador($_SESSION['ID']));
			$this->view->load("registros/coordinador.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		/**
		* Almacena la informacion de un coordinador para su almacenamiento en la base de datos
		**/
		public function coordinador_register()
		{
			$datos_usuario = [
				"Correo" => $_POST['Correo'],
				"Nombre" => $_POST['Nombre'],
				"Apellido" => $_POST['Apellido'],
				"Telefono" => $_POST['Telefono'],
				"Genero" => $_POST['gender'],
			];
			$datos_academicos = [
				"Matricula" => $_POST['Matricula'],
				"Nivel" => $_POST['Titulo'],
				"Escuela" => $_POST['Escuela'],
			];
			$this->model->Registro_ProfCoord(2,$datos_usuario,$datos_academicos);
			
		}

		/**
		* Almacena la informacion de un profesor para su almacenamiento en la base de datos
		**/
		public function profesor_register()
		{
			$datos_usuario = [
				"Correo" => $_POST['Correo'],
				"Nombre" => $_POST['Nombre'],
				"Apellido" => $_POST['Apellido'],
				"Telefono" => $_POST['Telefono'],
				"Genero" => $_POST['gender'],
			];
			$datos_academicos = [
				"Matricula" => $_POST['Matricula'],
				"Nivel" => $_POST['Titulo'],
				"Escuela" => $_POST['Escuela'],
			];
			$this->model->Registro_ProfCoord(3,$datos_usuario,$datos_academicos);
		}
		
		/**
		* Muestra la vista, datos y categorias necesarias para guardar un nuevo archivo, ademas de
		* todos los materiales creados por el usuario
		**/
		public function archivo()
		{
			$this->view->load("Sesion/header_sesion.php");
			define('Material',$this->model->get_material($_SESSION['ID']));
			define('Categoria',$this->model->get_asignaturas());
			define('Tipo',$this->model->get_tipo());
			$this->view->load("registros/archivo.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		/**
		* guarda el archivo del usuario, y genera la informacion necesaria para almacenarlo en 
		* la base de datos
		**/
		public function upload()
		{
			$aux = ((integer)((string)$_SESSION['ID'])[0] == 2) ? "Coordinador":"Profesor";
			$dir_subida = 'ficheros/usuarios/'.$aux."/".$_SESSION['ID']."/";
			$this->model->save_Material($_POST,$_FILES,$dir_subida);
		}

	}

?>
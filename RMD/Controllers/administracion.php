<?php 

	/**
	 * Clase que genera la vista principal con la sesion iniciada
	 * @author Jesus Rivera
	**/
	class Administracion extends Controller
	{

		/**
		* Constructor de la clase
		* genera los datos de la sesion iniciada, en caso de no existir
		* redirige al main
		**/	
		function __construct()
		{
			parent::__construct();
			$this->loadModel("administracion");
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
			define("Valores",$this->model->get_registros());
		}

		/**
		* Metodo que carga los mensajes recibidos y enviados
		**/
		public function posts()
		{
			$this->view->load("Sesion/header_sesion.php");
			$datos = $this->model->get_mensajes($_SESSION['ID']);
			define('mensajes_recibido',$datos[0]);
			define('mensaje_enviado',$datos[1]);
			$this->view->load("administracion/mensajes.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		/**
		* Metodo que se encarga de crear un nuevo mensaje
		**/
		public function new()
		{
			$this->view->load("Sesion/header_sesion.php");
			$this->view->load("administracion/redactar.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		/**
		* Metodo que registra un nuevo mensaje en la base de datos
		**/
		public function send()
		{
			$destinatario = $_POST['Destinatario'];
			$mensaje = $_POST['comment'];
			if($this->model->select('SELECT * FROM Usuario WHERE Usuario.Usuario = "'.$destinatario.'"')->fetch())
			{
				$this->model->enviar_mensaje($destinatario,$mensaje);
				header('Location: '.URL."principal/index");
			}else
			{
				header('Location: '.URL."administracion/new?ERROR=1");
			}
		}

		public function read()
		{
			$this->view->load("Sesion/header_sesion.php");
			define("Remitente",$this->model->get_mensaje_remitente($_GET['msg']));
			if (strcmp(Remitente[5],"Male") == 0) {
					define('Direccion_picture',Remitente[8]."_H.png");
				}else {
					define('Direccion_picture',Remitente[8]."_M.png");
				}
			$this->view->load("administracion/lectura.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		public function saves()
		{
			$this->view->load("Sesion/header_sesion.php");
			define("Catalogo_guardado",$this->model->material_guardado($_SESSION['ID']));
			$this->view->load("administracion/mi_material.php");
			$this->view->load("Sesion/footer_sesion.php");
		}
	}
?>
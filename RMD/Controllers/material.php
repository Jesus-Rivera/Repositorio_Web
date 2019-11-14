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

			if (isset($_SESSION['ID'])) {
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
		}


		public function profile()
		{
			if (isset($_GET['id'])) {
				define('Informacion',$this->model->get_inf($_GET['id']));
				define('InfP',json_decode(Informacion));
				if (strcmp(InfP[9],"Male") == 0) {
					define('Direccion_picture',InfP[10]."_H.png");
				}else {
					define('Direccion_picture',InfP[10]."_M.png");
				}
				if (isset($_SESSION['ID'])) {
					$this->view->load("Sesion/header_sesion.php");
					$this->view->load("material/perfilAuxiliar.php");
					$this->view->load("Sesion/footer_sesion.php");
				}
				else{
					$this->view->load("invitado/header_invitado.php");
					$this->view->load("material/perfilAuxiliar.php");
					$this->view->load("invitado/footer_invitado.php");
				}
			}
			else{
				header('Location: '.URL."principal");
			}
		}

		public function edite_profile()
		{
			//$this->view->load("Sesion/header_sesion.php");
			define('Informacion',$this->model->get_inf($_SESSION['ID']));
			$this->view->load("administracion/editarPerfil.php");
			//$this->view->load("Sesion/footer_sesion.php");
		}

		public function view()
		{
			
			//echo $_GET['id'];
			if (isset($_GET['id'])) {
				define("Datos",$this->model->get_material_datos($_GET['id']));
				define("Comentarios",$this->model->get_Comentarios($_GET['id']));
				if (isset($_SESSION['ID'])) {
					$this->view->load("Sesion/header_sesion.php");
					$this->view->load("material/material.php");
					$this->view->load("Sesion/footer_sesion.php");
				}
				else{
					$this->view->load("invitado/header_invitado.php");
					$this->view->load("material/material.php");
					$this->view->load("invitado/footer_invitado.php");
				}
			}
			else{
				header('Location: '.URL."principal");
			}
		}

		public function new_comment()
		{
			$id = $this->model->select("SELECT idComentario FROM comentario ORDER BY idComentario DESC LIMIT 1")->fetch()[0]+1;
			$fecha = getdate();
			$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
			$this->model->insert("comentario",[
				'idComentario	' => $id,
				'Usuario_idUsuario' => $_SESSION['ID'],
				'Archivo_idArchivo' => $_GET['id'],
				'Fecha' => $fecha_ingresar,
				'Mensaje' => $_POST['comentario'],
			]);
			header('Location: '.URL."material/view?id=".$_GET['id']);
		}

		public function save()
		{
			if (!isset($this->model->select("SELECT * FROM archivo_guardado WHERE archivo_guardado.Usuario_idUsuario = ".$_GET['usuario']." && archivo_guardado.Archivo_idArchivo= ".$_GET['archivo'])->fetch()[0])) {
				$fecha = getdate();
				$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
				$this->model->insert("archivo_guardado",[
					'Usuario_idUsuario' => $_GET['usuario'],
					'Archivo_idArchivo' => $_GET['archivo'],
					'Fecha' => $fecha_ingresar,
				]);
			}
			header('Location: '.URL."material/view?id=".$_GET['archivo']);	
		}
	}

?>
<?php 
	/**
	 * 
	 */
	class Material extends Controller
	{
		/**
		* Constructor de la clase
		* genera los datos de la sesion iniciada en caso de existir
		**/
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

		/**
		* Metodo que genera la vista de un perfil, ya sea de la sesion iniciada o no
		**/
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
					$this->view->load("material/profile.php");
					$this->view->load("Sesion/footer_sesion.php");
				}
				else{
					$this->view->load("invitado/header_invitado.php");
					$this->view->load("material/profile.php");
					$this->view->load("invitado/footer_invitado.php");
				}
			}
			else{
				header('Location: '.URL."principal");
			}
		}

		/**
		* Metodo que genera la vista para editar un perfil
		**/
		public function edit_profile()
		{
			$this->view->load("Sesion/header_sesion.php");
			define('Informacion',$this->model->get_inf($_SESSION['ID']));
			$this->view->load("administracion/editarPerfil.php");
			$this->view->load("Sesion/footer_sesion.php");
		}

		/**
		* Metodo que genera la vista para un archivo
		**/
		public function view()
		{
			if (isset($_GET['id'])) {
				define("Datos",$this->model->get_material_datos($_GET['id']));
				define("Comentarios",$this->model->get_Comentarios($_GET['id']));
				switch (substr(Datos[3],-3)) {
						case 'doc':
							define('imagen','<i class="fas fa-file-word"></i>');
						break;
						case 'ppt':
							define('imagen','<i class="fas fa-file-powerpoint"></i>');
						break;
						case 'xls':
							define('imagen','<i class="fas fa-file-excel"></i>');
						break;
						case 'jpg':
							define('imagen','<i class="fas fa-file-image"></i>');
						break;
						case 'pdf':
							define('imagen','<i class="fas fa-file-pdf"></i>');
						break;
						default:
							define('imagen','<i class="fas fa-file-video"></i>');
						break;
					}
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

		/**
		* Metodo que guarda un nuevo comentario en la base de datos
		**/
		public function new_comment()
		{
			$id = $this->model->select("SELECT idComentario FROM Comentario ORDER BY idComentario DESC LIMIT 1")->fetch()[0]+1;
			$fecha = getdate();
			$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
			$this->model->insert("Comentario",[
				'idComentario	' => $id,
				'Usuario_idUsuario' => $_SESSION['ID'],
				'Archivo_idArchivo' => $_GET['id'],
				'Fecha' => $fecha_ingresar,
				'Mensaje' => $_POST['Comentario'],
			]);
			header('Location: '.URL."material/view?id=".$_GET['id']);
		}

		/**
		* Metodo que almacena la informacion de un archivo en la base de datos,
		* haciendo referencia al usuario quien lo almaceno
		**/
		public function save()
		{
			if (!isset($this->model->select("SELECT * FROM Archivo_guardado WHERE Archivo_guardado.Usuario_idUsuario = ".$_GET['usuario']." && Archivo_guardado.Archivo_idArchivo= ".$_GET['archivo'])->fetch()[0])) {
				$fecha = getdate();
				$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
				$this->model->insert("Archivo_guardado",[
					'Usuario_idUsuario' => $_GET['usuario'],
					'Archivo_idArchivo' => $_GET['archivo'],
					'Fecha' => $fecha_ingresar,
				]);
			}
			header('Location: '.URL."material/view?id=".$_GET['archivo']);	
		}


		public function download()
		{
			$tipo = ((integer)((string)$_GET['usuario'])[0] == 2) ? "Coordinador":"Profesor";
			$nombre = $this->model->select("SELECT * FROM Archivo WHERE Archivo.idArchivo = ".$_GET['archivo'])->fetch()['Ubicacion'];
			$Ubicacion = "ficheros/usuarios/".$tipo."/".$_GET['usuario']."/".$nombre;
			header("Content-disposition: attachment; filename=".$Ubicacion);
			header("Content-type: MIME");
			readfile($Ubicacion);
			header('Location: '.URL."material/view?id=".$_GET['archivo']);
		}
	}

?>
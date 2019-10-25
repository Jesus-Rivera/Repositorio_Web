<?php 

	/**
	 * Clase que controla el formulario de inicio de sesion y regitro
	 * @author Jesus Rivera
	*/
	class Formulario extends Controller
	{
		/**
		* Constructor de la clase
		**/	
		function __construct()
		{
			parent::__construct();
		}

		/**
		 * Funcion que carga la ventana general del registro e inicio de sesion
		**/
		function index()
		{
			session_start();
			if (isset($_SESSION['ID'])) {
				header('Location: '.URL."principal");
			}
			$this->view->load("formulario.php");
		}


		/**
		 * Funcion que verifica la existencia de un usuario
		 * y su correcta contraseña
		**/
		function getUser()
		{
			$correo = $_POST['correo'];
			$password = base64_encode($_POST['pass']);
			$consulta = $this->model->select('SELECT Usuario.Password,Usuario.idUsuario FROM `usuario` WHERE Usuario.Correo = "'.$correo.'"');
			while ($row = $consulta->fetch()) {
				$password_obtenida = $row['Password'];
				$id_obtenida = $row['idUsuario'];
			}
			if(strcmp($password,$password_obtenida) == 0)
			{
				session_start();
				$_SESSION['ID'] = $id_obtenida;
				header('Location: '.URL."principal");
			}
			else
			{
				echo "Datos erroneos";
			}
		}

		/**
		 * Funcion que crea un usuario dado los datos obtenidos por html
		 * registra este nuevo usuario en la tabla Usuario y Alumno
		 * ya que sera un usuario general 
		**/
		function createUser()
		{
			$nombre = $_POST['reg-nombre'];
			$apellido = $_POST['reg-apellido'];
			$correo = $_POST['reg-correo'];
			$password = base64_encode($_POST['reg-pass']);
			
			$id = "100".$this->model->getLastId() + 1;
			$fecha_arr = getdate();
			$fecha = $fecha_arr['year']."-".$fecha_arr['mon']."-".$fecha_arr['mday'];

			$this->model->insert("usuario",[
				'idUsuario' => $id,
				'Registro' => $fecha,
				'nombre' => $nombre,
				'apellido' => $apellido,
				'correo' => $correo,
				'password' => $password,
			]);
			$this->model->insert("alumno",[
				'Usuario_idUsuario' => $id,
			]);
			session_start();
			$_SESSION['ID'] = $id;
			header('Location: '.URL."principal");
		}
	}
?>
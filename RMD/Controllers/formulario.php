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
			$this->view->load("formulario.php");
		}

		//ctruter1@globo.com
		//NqqiBcANc

		/**
		 * Funcion que verifica la existencia de un usuario
		 * y su correcta contraseña
		**/
		function getUser()
		{
			$correo = $_POST['correo'];
			$password = base64_encode($_POST['pass']);
			$resultado = $this->model->select('SELECT Usuario.idUsuario,Usuario.Nombre,Usuario.Apellido,Usuario.Usuario,Usuario.Password FROM `usuario` WHERE Usuario.Correo = "'.$correo.'"');

			if(strcmp($password,$resultado[4]) == 0)
			{
				echo "Contraseña correcta";
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
		}
	}
?>
<?php 
	/**
	 * Funcion encargada de manejar la informacion
	 * para una sesion iniciada
	 * @author Jesus Rivera
	**/
	class PrincipalModel extends Model
	{
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
		}

		public function get_datos($id)
		{
			$consulta = $this->select("SELECT Usuario.Nombre as 'Nombre', Usuario.Apellido as 'Apellido', Usuario.Genero as 'Genero', Usuario.Usuario as 'Usuario' FROM `usuario` WHERE Usuario.idUsuario = ".$id);

			while ($row = $consulta->fetch()) {
				$datos = $row;
			}
			for ($i = 0; $i <= (sizeof($datos)/2); $i ++) { 
				unset($datos[$i]);
			}
			unset($datos[3]);
			if($this->select("SELECT alumno.Usuario_idUsuario FROM `alumno` WHERE alumno.Usuario_idUsuario = ".$id)->fetch())
			{
				array_push($datos,"Alumno");
			} elseif ($this->select("SELECT profesor.Usuario_idUsuario FROM `profesor` WHERE profesor.Usuario_idUsuario = ".$id)->fetch()) {
				array_push($datos,"Profesor");
			} elseif ($this->select("SELECT coordinador.Usuario_idUsuario FROM `coordinador` WHERE coordinador.Usuario_idUsuario = ".$id)->fetch()) {
				array_push($datos, "Cordinador");
			}
			return $datos;
		}


		public function get_mensajes($id)
		{
			$consulta = $this->select("SELECT mensaje.Contenido as Mensaje, mensaje_recibido.Fecha as Fecha FROM (mensaje JOIN mensaje_recibido ON mensaje.idMensaje = mensaje_recibido.Mensaje_idMensaje) WHERE mensaje_recibido.Usuario_idUsuario = ".$id);

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
				array_push($datos,$aux);
			}
			$final = array();
			array_push($final,$datos);
			$consulta = $this->select("SELECT mensaje.Contenido as Mensaje, mensaje_enviado.Fecha as Fecha FROM (mensaje JOIN mensaje_enviado ON mensaje.idMensaje = mensaje_enviado.Mensaje_idMensaje) WHERE mensaje_enviado.Usuario_idUsuario = ".$id);

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
				array_push($datos,$aux);
			}
			array_push($final,$datos);
			return $final;
		}


		public function get_material($id)
		{
			$tipo = ((integer)((string)$id)[0] == 2) ? "Coordinador":"Profesor";
			$consulta = "SELECT asignatura.Nombre as Asignatura,archivo.Nombre as Nombre, archivo.Descripcion as Descripcion, archivo.Ubicacion as Ubicacion FROM (archivo JOIN asignatura ON archivo.Asignatura_idAsignatura = asignatura.idAsignatura) WHERE archivo.".$tipo."_Usuario_idUsuario = ".$id;

			$query = $this->select($consulta);

			$datos = array();
			while ($row = $query->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);	
				}
				array_push($datos,$aux);
			}
			return $datos;
		}

		public function get_registrosCP($id)
		{
			
			$consulta = "SELECT usuario.Nombre, usuario.Apellido, usuario.Usuario FROM  profesor LEFT JOIN usuario ON profesor.Usuario_idUsuario = usuario.idUsuario WHERE profesor.Coordinador_Usuario_idUsuario = ".$id;

			$query = $this->select($consulta);

			$datos = array();
			while ($row = $query->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);	
				}
				array_push($datos,$aux);
			}

			$consulta = "SELECT usuario.Nombre, usuario.Apellido, usuario.Usuario FROM  coordinador LEFT JOIN usuario ON coordinador.Usuario_idUsuario = usuario.idUsuario WHERE coordinador.Coordinador_Usuario_idUsuario = ".$id;

			$query = $this->select($consulta);
			while ($row = $query->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);	
				}
				array_push($datos,$aux);
			}
			return $datos;
		}

		public function get_inf($id)
		{
			$consulta = "SELECT Nombre,Apellido,Usuario,Correo,Telefono,Fecha_Nacimiento,Pais,Estado,Ciudad FROM Usuario WHERE Usuario.idUsuario = ".$id;

			$query = $this->select($consulta)->fetch();
			$datos = array();
			for ($i=0; $i < sizeof($query)/2; $i++) { 
					array_push($datos,$query[$i]);	
				}
			$nacimiento = new DateTime($datos[5]);
		    $hoy = new DateTime();
		    $datos[5] = $hoy->diff($nacimiento)->y;
			return json_encode($datos);
		}
	}
 ?>
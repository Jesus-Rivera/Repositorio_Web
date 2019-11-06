<?php 

	/**
	 * 
	 */
	class RegistroModel extends Model
	{
		
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
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

		public function get_registro_coordinador($id)
		{
			$datos = array();
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

		public function get_registro_profesor($id)
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
			return $datos;
		}

		public function get_asignaturas()
		{
			$query = $this->select("SELECT Nombre FROM asignatura");

			$datos = array();
			while ($row = $query->fetch()) {
				array_push($datos,$row[0]);
			}
			return $datos;
		}
	}
 ?>
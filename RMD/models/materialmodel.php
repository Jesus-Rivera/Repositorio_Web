<?php 

	/**
	 * 
	 */
	class MaterialModel extends Model
	{
		
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
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
		    $datos[9] = $this->select("SELECT Genero FROM Usuario WHERE Usuario.idUsuario = ".$id)->fetch()[0];
		    if($this->select("SELECT alumno.Usuario_idUsuario FROM `alumno` WHERE alumno.Usuario_idUsuario = ".$id)->fetch())
			{
				$datos[10] = "Alumno";
			} elseif ($this->select("SELECT profesor.Usuario_idUsuario FROM `profesor` WHERE profesor.Usuario_idUsuario = ".$id)->fetch()) {
				$datos[10] = "Profesor";
				$datos[11] = $this->select("SELECT profesor.Escuela_de_Procedencia FROM `profesor` WHERE profesor.Usuario_idUsuario = ".$id)->fetch()[0];
			} elseif ($this->select("SELECT coordinador.Usuario_idUsuario FROM `coordinador` WHERE coordinador.Usuario_idUsuario = ".$id)->fetch()) {
				$datos[10] = "Coordinador";
				$datos[11] = $this->select("SELECT coordinador.Escuela_de_Procedencia FROM `coordinador` WHERE coordinador.Usuario_idUsuario = ".$id)->fetch()[0];
			}
			return json_encode($datos);
		}

		public function get_material_datos($id)
		{
			$autor = "";
			if($this->select("SELECT Profesor_Usuario_idUsuario FROM archivo WHERE archivo.idArchivo = ".$id)->fetch()[0])
			{
				$autor = "Profesor_Usuario_idUsuario";
			}elseif ($this->select("SELECT Coordinador_Usuario_idUsuario FROM archivo WHERE archivo.idArchivo = ".$id)->fetch()[0]) {
				$autor = "Coordinador_Usuario_idUsuario";	
				
			}
			$aux = $this->select("SELECT Nombre,Descripcion,Asignatura_idAsignatura,ubicacion,".$autor." FROM archivo WHERE archivo.idArchivo = ".$id)->fetch();
			$datos = array();
			for ($i = 0; $i < sizeof($aux)/2; $i++) { 
				array_push($datos,$aux[$i]);
			}
			$datos[2] = $this->select("SELECT Nombre FROM asignatura WHERE asignatura.idAsignatura = ".$datos[2])->fetch()[0];
			$aux = $this->select("SELECT Nombre,Apellido,usuario FROM usuario WHERE usuario.idUsuario = ".$datos[4])->fetch();
			for ($i = 0; $i < sizeof($aux)/2; $i++) { 
				array_push($datos,$aux[$i]);
			}	
			if (strcmp($autor,"Coordinador_Usuario_idUsuario") == 0) {
				array_push($datos,"Coordinador");
			}else{
				array_push($datos,"Profesor");
			}
			return $datos;
		}

		public function get_Comentarios($id)
		{
			$consulta = $this->select("SELECT Mensaje,Fecha,Usuario_idUsuario FROM comentario WHERE Archivo_idArchivo = ".$id." ORDER BY Fecha DESC");
			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);
				}
				array_push($aux,$this->select("SELECT usuario FROM usuario WHERE usuario.idUsuario = ".$aux[2])->fetch()[0]);
				array_push($datos,$aux);
			}
			return $datos;
		}
		
	}
 ?>
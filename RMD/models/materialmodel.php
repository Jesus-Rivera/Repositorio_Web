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

		/**
		* Obtiene los datos de un usuario
		* @param $id identificador del usuario
		* @return json con los datos del usuario
		*
		**/
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
		    if($this->select("SELECT Alumno.Usuario_idUsuario FROM `Alumno` WHERE Alumno.Usuario_idUsuario = ".$id)->fetch())
			{
				$datos[10] = "Alumno";
			} elseif ($this->select("SELECT Profesor.Usuario_idUsuario FROM `Profesor` WHERE Profesor.Usuario_idUsuario = ".$id)->fetch()) {
				$datos[10] = "Profesor";
				$datos[11] = $this->select("SELECT Profesor.Escuela_de_Procedencia FROM `Profesor` WHERE Profesor.Usuario_idUsuario = ".$id)->fetch()[0];
			} elseif ($this->select("SELECT Coordinador.Usuario_idUsuario FROM `Coordinador` WHERE Coordinador.Usuario_idUsuario = ".$id)->fetch()) {
				$datos[10] = "Coordinador";
				$datos[11] = $this->select("SELECT Coordinador.Escuela_de_Procedencia FROM `Coordinador` WHERE Coordinador.Usuario_idUsuario = ".$id)->fetch()[0];
			}
			return json_encode($datos);
		}

		/**
		* Obtiene la iformacion de un material especifico
		* @param $id identificador del material
		* @return arreglo con datos del material
		**/
		public function get_material_datos($id)
		{
			$autor = "";
			if($this->select("SELECT Profesor_Usuario_idUsuario FROM Archivo WHERE Archivo.idArchivo = ".$id)->fetch()[0])
			{
				$autor = "Profesor_Usuario_idUsuario";
			}elseif ($this->select("SELECT Coordinador_Usuario_idUsuario FROM Archivo WHERE Archivo.idArchivo = ".$id)->fetch()[0]) {
				$autor = "Coordinador_Usuario_idUsuario";	
				
			}
			$aux = $this->select("SELECT Nombre,Descripcion,Asignatura_idAsignatura,ubicacion,".$autor." FROM Archivo WHERE Archivo.idArchivo = ".$id)->fetch();
			$datos = array();
			for ($i = 0; $i < sizeof($aux)/2; $i++) { 
				array_push($datos,$aux[$i]);
			}
			$datos[2] = $this->select("SELECT Nombre FROM Asignatura WHERE Asignatura.idAsignatura = ".$datos[2])->fetch()[0];
			$aux = $this->select("SELECT Nombre,Apellido,Usuario FROM Usuario WHERE Usuario.idUsuario = ".$datos[4])->fetch();
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

		/**
		* Obtienen los comentarios de un material
		* @param $id identificador del material
		* @return arreglo con comentarios hechos
		**/
		public function get_Comentarios($id)
		{
			$consulta = $this->select("SELECT Mensaje,Fecha,Usuario_idUsuario FROM Comentario WHERE Archivo_idArchivo = ".$id." ORDER BY Fecha DESC");
			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);
				}
				array_push($aux,$this->select("SELECT Usuario FROM Usuario WHERE Usuario.idUsuario = ".$aux[2])->fetch()[0]);
				array_push($datos,$aux);
			}
			return $datos;
		}
		
	}
 ?>
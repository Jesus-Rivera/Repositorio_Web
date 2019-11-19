<?php 
	/**
	 * Clase padre para todos los modelos 
	 * @author Jesus Rivera
	*/
	class Model
	{
		/**
		 * Constructor de la clase
		 * crea un nuevo objeto para manipular la base de datos
		**/
		function __construct()
		{
			$this->db = new Database();
		}

		/**
		 * Funcion que inserta valores a una tabla
		 * @param string $tabla nombre de la tabla
		 * @param array $datos valores que se insertara a la tabla
		**/
		public function insert($tabla,$datos)
		{
			$consulta = "INSERT INTO ".$tabla." (";
			foreach ($datos as $key => $valor) {
				$consulta = $consulta.$key.","; 
			}
			$consulta = substr($consulta, 0, -1);
			$consulta = $consulta.') VALUES ('; 
			foreach ($datos as $key => $valor) {
				$consulta = $consulta.'"'.$valor.'",'; 
			}
			$consulta = substr($consulta, 0, -1);
			$consulta = $consulta.')';
			$query = $this->db->connect()->prepare($consulta);
			$query->execute();
		}

		/**
		 * Funcion que hace una consulta a la base de datos
		 * @param string $consulta consulta que se realizara a la base de datos
		 * @return array valores obtenidos de la consulta
		**/
		public function select($consulta)
		{
			$query = $this->db->connect()->query($consulta);
			return $query;
		}

		/**
		 * Funcion que actualiza los elementos de una tabla
		 * @param string $tabla nombre de la tabla
		 * @param array $datos valores que se insertara a la tabla
		 * @param array $id identificador del registro
		**/
		public function update($tabla,$datos,$condicion)
		{
			$consulta = "UPDATE ".$tabla." SET ";
			foreach ($datos as $key => $value) {
				$consulta .= $key." = '".$value."',";
			}
			$consulta = substr($consulta, 0, -1);
			$consulta .= " WHERE ".$tabla.".".$condicion[0]." = ".$condicion[1];
			$query = $this->db->connect()->prepare($consulta);
			$query->execute();
		}

		/**
		 * Funcion que alimina un registro de la tabla
		 * @param string $tabla nombre de la tabla
		 * @param array $id identificador del registro
		**/
		public function delete($tabla,$condicion)
		{
			$consulta = "DELETE FROM ".$tabla;
			$consulta .= " WHERE ".$tabla.".".$condicion[0]." = ".$condicion[1];
			$query = $this->db->connect()->prepare($consulta);
			$query->execute();
		}

		public function get_datos($id)
		{
			$consulta = $this->select("SELECT Usuario.Nombre as 'Nombre', Usuario.Apellido as 'Apellido', Usuario.Genero as 'Genero', Usuario.Usuario as 'Usuario' FROM `Usuario` WHERE Usuario.idUsuario = ".$id);

			while ($row = $consulta->fetch()) {
				$datos = $row;
			}
			for ($i = 0; $i <= (sizeof($datos)/2); $i ++) { 
				unset($datos[$i]);
			}
			unset($datos[3]);
			if($this->select("SELECT Alumno.Usuario_idUsuario FROM `Alumno` WHERE Alumno.Usuario_idUsuario = ".$id)->fetch())
			{
				array_push($datos,"Alumno");
			} elseif ($this->select("SELECT Profesor.Usuario_idUsuario FROM `Profesor` WHERE Profesor.Usuario_idUsuario = ".$id)->fetch()) {
				array_push($datos,"Profesor");
			} elseif ($this->select("SELECT Coordinador.Usuario_idUsuario FROM `Coordinador` WHERE Coordinador.Usuario_idUsuario = ".$id)->fetch()) {
				array_push($datos, "Coordinador");
			}
			return $datos;
		}

		/**
		* Obtiene la informacion y todos los registros almacenados en la base de datos
		**/
		public function get_registros()
		{
			$datos = array();
			array_push($datos,$this->select("SELECT count(*) FROM Coordinador")->fetch()[0]
				,$this->select("SELECT count(*) FROM Alumno")->fetch()[0]
				,$this->select("SELECT count(*) FROM Profesor")->fetch()[0]
				,$this->select("SELECT count(*) FROM Asignatura")->fetch()[0]
				,$this->select("SELECT count(*) FROM Archivo")->fetch()[0]);
			return $datos;
		}

		/**
		* Genera la informacion para mostrar de un numero dado de manera aleatoria
		* @param $cantidad elementos que se generaran
		**/
		public function material_rand($cantidad)
		{
			$consulta = $this->select("SELECT Archivo.idArchivo,Archivo.Nombre,Archivo.Descripcion FROM Archivo ORDER BY RAND() LIMIT ".$cantidad);
			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				for ($i = 0; $i < (sizeof($row)/2); $i ++) { 
					array_push($aux,$row[$i]);
				}
				if ($this->select("SELECT * FROM Video WHERE Archivo_idArchivo = ".$row[0])->fetch()) {
					array_push($aux,"Video");
				}elseif ($this->select("SELECT * FROM Cuestionario WHERE Archivo_idArchivo = ".$row[0])->fetch()) {
					array_push($aux,"Cuestionario");
				}elseif ($this->select("SELECT * FROM Documento WHERE Archivo_idArchivo = ".$row[0])->fetch()) {
					array_push($aux,"Documento");
				}

				array_push($datos,$aux);
			}
			return $datos;
		}

	}

 ?>
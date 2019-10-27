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
				array_push($datos, "Coordinador");
			}
			return $datos;
		}

		public function get_registros()
		{
			$datos = array();
			array_push($datos,$this->select("SELECT count(*) FROM coordinador")->fetch()[0]
				,$this->select("SELECT count(*) FROM alumno")->fetch()[0]
				,$this->select("SELECT count(*) FROM profesor")->fetch()[0]
				,$this->select("SELECT count(*) FROM asignatura")->fetch()[0]
				,$this->select("SELECT count(*) FROM archivo")->fetch()[0]);
			return $datos;
		}

	}

 ?>
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

	}

 ?>
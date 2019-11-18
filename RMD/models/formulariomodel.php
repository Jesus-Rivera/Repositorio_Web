<?php 
	/**
	 * Funcion encargada de manejar la informacion
	 * obtenida del formulario
	 * para inicio de sesion y registro
	 * @author Jesus Rivera
	**/
	class Formulariomodel extends Model
	{
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
		}

		/**
		 * Funcion que obtiene el ultimo ID de un usuario registrado
		 * @return ID obtenido
		**/
		public function getLastId()
		{
			$query = $this->db->connect()->query('SELECT Alumno.Usuario_idUsuario FROM Alumno ORDER BY Alumno.Usuario_idUsuario DESC LIMIT 1');
			$resultado = $query->fetch();
			$id = 0;
			foreach ($resultado as $value) {
				$id = $value;
			}
			$id = (string) $id;
			$id = substr($id, 3, strlen($id));
			$id = (integer) $id;
			return $id;
		}
	}
 ?>
<?php 
	/**
	 * Clase que maneja la informacion del main
	 * @author Jesus Rivera
	**/
	class mainModel extends Model
	{
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
			$datos = array();
			$consulta = $this->select("SELECT usuario.idUsuario FROM (Usuario JOIN coordinador) WHERE (coordinador.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Female')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			$consulta = $this->select("SELECT usuario.idUsuario FROM (Usuario JOIN profesor) WHERE (profesor.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Male')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			$consulta = $this->select("SELECT usuario.idUsuario FROM (Usuario JOIN coordinador) WHERE (coordinador.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Female')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			$consulta = $this->select("SELECT usuario.idUsuario FROM (Usuario JOIN profesor) WHERE (profesor.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Male')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			define('First_users', $datos);
		}

		public function get_inf($id,$tipo)
		{
			$consulta = $this->select("SELECT usuario.Nombre,usuario.Apellido,usuario.Correo,".$tipo.".Escuela_de_Procedencia FROM (Usuario JOIN ".$tipo." ON Usuario.idUsuario = ".$tipo.".Usuario_idUsuario) WHERE usuario.idUsuario = ".$id);
			$datos = array();
			while ($row = $consulta->fetch()){
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($datos,$row[$i]);	
				}
			}
			return $datos;
		}
	}
 ?>
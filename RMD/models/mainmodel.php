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
			$consulta = $this->select("SELECT Usuario.idUsuario FROM (Usuario JOIN Coordinador) WHERE (Coordinador.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Female')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			$consulta = $this->select("SELECT Usuario.idUsuario FROM (Usuario JOIN Profesor) WHERE (Profesor.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Male')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			$consulta = $this->select("SELECT Usuario.idUsuario FROM (Usuario JOIN Coordinador) WHERE (Coordinador.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Female')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			$consulta = $this->select("SELECT Usuario.idUsuario FROM (Usuario JOIN Profesor) WHERE (Profesor.Usuario_idUsuario = Usuario.idUsuario) AND (Usuario.Genero = 'Male')ORDER BY RAND() LIMIT 1 ");
			while ($row = $consulta->fetch()){
				array_push($datos,$row[0]);
			}
			define('First_users', $datos);
		}

		/**
		* Obtiene la informacion de un usuario en especifico
		* @param $id identificador del usuario del que se obtendra la informacion
		* @param $tipo tipo de usuario del que se obtendra la informacion, ya se coordinador o profesor
		* @return arreglo con informacion del usuario
		**/
		public function get_inf($id,$tipo)
		{
			$consulta = $this->select("SELECT Usuario.Nombre,Usuario.Apellido,Usuario.Correo,".$tipo.".Escuela_de_Procedencia FROM (Usuario JOIN ".$tipo." ON Usuario.idUsuario = ".$tipo.".Usuario_idUsuario) WHERE Usuario.idUsuario = ".$id);
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
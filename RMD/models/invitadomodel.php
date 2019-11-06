<?php 
	/**
	 * Funcion 
	 * @author Jesus Rivera
	**/
	class InvitadoModel extends Model
	{
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
		}

		public function material_invitado($Categoria)
		{
			$consulta = $this->select('SELECT archivo.idArchivo,archivo.Nombre,archivo.Descripcion FROM (archivo JOIN asignatura ON archivo.Asignatura_idAsignatura = asignatura.idAsignatura) WHERE asignatura.Nombre = "'.$Categoria.'" ORDER BY rand() LIMIT 6');
			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				for ($i = 0; $i < (sizeof($row)/2); $i ++) { 
					array_push($aux,$row[$i]);
				}
				if ($this->select("SELECT * FROM video WHERE Archivo_idArchivo = ".$row[0])->fetch()) {
					array_push($aux,"Video");
				}elseif ($this->select("SELECT * FROM cuestionario WHERE Archivo_idArchivo = ".$row[0])->fetch()) {
					array_push($aux,"Cuestionario");
				}elseif ($this->select("SELECT * FROM documento WHERE Archivo_idArchivo = ".$row[0])->fetch()) {
					array_push($aux,"Documento");
				}

				array_push($datos,$aux);
			}
			return $datos;
		}

	}
 ?>

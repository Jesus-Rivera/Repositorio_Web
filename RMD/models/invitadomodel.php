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

		/**
		* Obtiene la informacion de 6 materiales que se mostraran al invitado
		* obtenidos de una categoria especifics
		* @param $Categoria categoria de donde se obtendran los datos
		* @return matriz con material y datos
		**/
		public function material_invitado($Categoria)
		{
			$consulta = $this->select('SELECT Archivo.idArchivo,Archivo.Nombre,Archivo.Descripcion FROM (Archivo JOIN Asignatura ON Archivo.Asignatura_idAsignatura = Asignatura.idAsignatura) WHERE Asignatura.Nombre = "'.$Categoria.'" ORDER BY rand() LIMIT 6');
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

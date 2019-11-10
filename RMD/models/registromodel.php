<?php 

	/**
	 * 
	 */
	class RegistroModel extends Model
	{
		
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
		}


		public function get_material($id)
		{
			$tipo = ((integer)((string)$id)[0] == 2) ? "Coordinador":"Profesor";
			$consulta = "SELECT asignatura.Nombre as Asignatura,archivo.Nombre as Nombre, archivo.Descripcion as Descripcion, archivo.Ubicacion as Ubicacion, archivo.idArchivo as ID FROM (archivo JOIN asignatura ON archivo.Asignatura_idAsignatura = asignatura.idAsignatura) WHERE archivo.".$tipo."_Usuario_idUsuario = ".$id;

			$query = $this->select($consulta);

			$datos = array();
			while ($row = $query->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);
				}
				if ($this->select('SELECT * FROM video WHERE video.Archivo_idArchivo = '.$row[4])->fetch()){
					array_push($aux,"Video");
				}elseif ($this->select('SELECT * FROM documento WHERE documento.Archivo_idArchivo = '.$row[4])->fetch()) {
					array_push($aux,"Documento");
				}elseif ($this->select('SELECT * FROM cuestionario WHERE cuestionario.Archivo_idArchivo = '.$row[4])->fetch()) {
					array_push($aux,"Cuestionario");
				}
				array_push($datos,$aux);
			}
			return $datos;
		}

		public function get_registro_coordinador($id)
		{
			$datos = array();
			$consulta = "SELECT usuario.Nombre, usuario.Apellido, usuario.Usuario FROM  coordinador LEFT JOIN usuario ON coordinador.Usuario_idUsuario = usuario.idUsuario WHERE coordinador.Coordinador_Usuario_idUsuario = ".$id;

			$query = $this->select($consulta);
			while ($row = $query->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);	
				}
				array_push($datos,$aux);
			}
			return $datos;
		}

		public function get_registro_profesor($id)
		{
			
			$consulta = "SELECT usuario.Nombre, usuario.Apellido, usuario.Usuario FROM  profesor LEFT JOIN usuario ON profesor.Usuario_idUsuario = usuario.idUsuario WHERE profesor.Coordinador_Usuario_idUsuario = ".$id;

			$query = $this->select($consulta);

			$datos = array();
			while ($row = $query->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);	
				}
				array_push($datos,$aux);
			}
			return $datos;
		}

		public function Registro_ProfCoord($tipo,$datos_usuario,$datos_academicos)
		{
			$id_coordinador = $_SESSION['ID'];
			$fecha = getdate();
			$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
			if ($tipo == 2) {
				$password = base64_encode("C@user&rmd#");
				$id = $this->select("SELECT Usuario_idUsuario FROM coordinador ORDER BY coordinador.Usuario_idUsuario DESC LIMIT 1")->fetch()[0] + 1;
				$usuario = substr($datos_usuario['Nombre'], 0, 3).substr($datos_usuario['Apellido'], 0, 3)."Coo".$id;
				$carpeta = "ficheros/usuarios/Coordinador/".$id;
			}else {
				$password = base64_encode("P@user&rmd#");
				$id = $this->select("SELECT Usuario_idUsuario FROM profesor ORDER BY profesor.Usuario_idUsuario DESC LIMIT 1")->fetch()[0] + 1;
				$usuario = substr($datos_usuario['Nombre'], 0, 3).substr($datos_usuario['Apellido'], 0, 3)."Pro".$id;
				$carpeta = "ficheros/usuarios/Profesor/".$id;
			}

			$this->insert("usuario",[
				'idUsuario	' => $id,
				'registro' => $fecha_ingresar,
				'Correo' => $datos_usuario['Correo'],
				'Nombre' => $datos_usuario['Nombre'],
				'Apellido' => $datos_usuario['Apellido'],
				'Telefono' => $datos_usuario['Telefono'],
				'Password' => $password,
				'Usuario' => $usuario,
				'Genero' => $datos_usuario['Genero'],
			]);

			$this->insert( ($tipo == 2) ? "Coordinador":"Profesor",[
				'Usuario_idUsuario' => $id,
				'Coordinador_Usuario_idUsuario' => $id_coordinador,
				'Nivel' => $datos_academicos['Nivel'],
				'Escuela_de_procedencia' => $datos_academicos['Escuela'],
				'Matricula' => $datos_academicos['Matricula'],
			]);

			
			mkdir($carpeta, 0777, true);

			header('Location: '.URL."principal/index");
		}

		public function get_asignaturas()
		{
			$query = $this->select("SELECT * FROM asignatura");

			$datos = array();
			while ($row = $query->fetch()) {
				array_push($datos,array($row[0],$row[1]));
			}
			return $datos;
		}

		public function get_tipo()
		{
			$query = $this->select("SELECT Nombre FROM tipo");

			$datos = array();
			while ($row = $query->fetch()) {
				array_push($datos,$row[0]);
			}
			return $datos;
		}

		public function save_Material($datos,$archivo,$carpeta)
		{
			$aux = ((integer)((string)$_SESSION['ID'])[0] == 2) ? "Coordinador":"Profesor";
			$aux = $aux."_Usuario_idUsuario";
			
			$id = $this->select("SELECT idArchivo FROM archivo ORDER BY archivo.idArchivo DESC LIMIT 1")->fetch()[0] + 1;

			$ubicacion = "";
			if (strcmp($datos['Direccion'],"")) {
				$ubicacion = $datos['Direccion'];
			}elseif (strcmp($datos['Cantidad'],"")){
				$ubicacion = $datos['Nombre'];
			}elseif (isset($_FILES)){
				$ubicacion = $archivo['Archivo']['name'];
			}

			$this->insert( "archivo",[
				'idArchivo' => $id,
				$aux => $_SESSION['ID'],
				'Nombre' => $datos['Nombre'],
				'Descripcion' => $datos['Descripcion'],
				'Asignatura_idAsignatura' => $datos['Asignatura'],
				'Ubicacion' => $ubicacion,
			]);

			if (strcmp($datos['Direccion'],"")) {
				$this->insert( "video",[
					'Archivo_idArchivo' => $id,
					'Duracion' => 5,
				]);
			}elseif (strcmp($datos['Cantidad'],"")) {
				$this->insert( "video",[
					'Archivo_idArchivo' => $id,
				]);
			}elseif (isset($_FILES)) {
				$tipo = $this->select("SELECT idTipo FROM tipo WHERE Nombre = '".substr($archivo['Archivo']['type'],-3,strlen($archivo['Archivo']['type']))."'")->fetch()[0];
				$this->insert( "documento",[
					'Archivo_idArchivo' => $id,
					'Tipo_idTipo' => $tipo,
				]);
				if (move_uploaded_file($archivo['Archivo']['tmp_name'], $carpeta.$archivo['Archivo']['name'])) {
				    header('Location: '.URL."principal/index");
				} else {
					header('Location: '.URL."registro/archivo?ERROR=1");
				}
			}
			header('Location: '.URL."principal/index");
		}
	}
 ?>
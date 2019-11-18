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

		/**
		* Obtiene los materiales registrados de un usuario
		* @param $id identificador del usuario de quien se obtendra los materiales
		* @return Matriz con los datos de los materiales
		**/
		public function get_material($id)
		{
			$tipo = ((integer)((string)$id)[0] == 2) ? "Coordinador":"Profesor";
			$consulta = "SELECT Asignatura.Nombre as Asignatura,Archivo.Nombre as Nombre, Archivo.Descripcion as Descripcion, Archivo.Ubicacion as Ubicacion, Archivo.idArchivo as ID FROM (Archivo JOIN Asignatura ON Archivo.Asignatura_idAsignatura = Asignatura.idAsignatura) WHERE Archivo.".$tipo."_Usuario_idUsuario = ".$id;

			$query = $this->select($consulta);

			$datos = array();
			while ($row = $query->fetch()) {
				$aux = array();
				for ($i=0; $i < sizeof($row)/2; $i++) { 
					array_push($aux,$row[$i]);
				}
				if ($this->select('SELECT * FROM Video WHERE Video.Archivo_idArchivo = '.$row[4])->fetch()){
					array_push($aux,"Video");
				}elseif ($this->select('SELECT * FROM Documento WHERE Documento.Archivo_idArchivo = '.$row[4])->fetch()) {
					array_push($aux,"Documento");
				}elseif ($this->select('SELECT * FROM Cuestionario WHERE Cuestionario.Archivo_idArchivo = '.$row[4])->fetch()) {
					array_push($aux,"Cuestionario");
				}
				array_push($datos,$aux);
			}
			return $datos;
		}

		/**
		* Obtiene los coordinadores registrados de un usuario
		* @param $id identificador del usuario de quien se obtendra los coordinadores
		* @return Matriz con los datos de los coordinadores
		**/
		public function get_registro_coordinador($id)
		{
			$datos = array();
			$consulta = "SELECT Usuario.Nombre, Usuario.Apellido, Usuario.Usuario FROM  Coordinador LEFT JOIN Usuario ON Coordinador.Usuario_idUsuario = Usuario.idUsuario WHERE Coordinador.Coordinador_Usuario_idUsuario = ".$id;

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

		/**
		* Obtiene los profesores registrados de un usuario
		* @param $id identificador del usuario de quien se obtendra los profesores
		* @return Matriz con los datos de los profesores
		**/
		public function get_registro_profesor($id)
		{
			
			$consulta = "SELECT Usuario.Nombre, Usuario.Apellido, Usuario.Usuario FROM  Profesor LEFT JOIN Usuario ON Profesor.Usuario_idUsuario = Usuario.idUsuario WHERE Profesor.Coordinador_Usuario_idUsuario = ".$id;

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


		/**
		* Metodo que guarda un nuevo profesor o coordinador en la base de datos
		* @param $tipo tipo de usuario de quien se creara el registro
		* @param $datos_usuario Datos generales del usuario a registrar
		* @param $datos_academicos Datos academicos del usuario a registrar 
		**/
		public function Registro_ProfCoord($tipo,$datos_usuario,$datos_academicos)
		{
			$id_coordinador = $_SESSION['ID'];
			$fecha = getdate();
			$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
			if ($tipo == 2) {
				$password = base64_encode("C@user&rmd#");
				$id = $this->select("SELECT Usuario_idUsuario FROM Coordinador ORDER BY Coordinador.Usuario_idUsuario DESC LIMIT 1")->fetch()[0] + 1;
				$usuario = substr($datos_usuario['Nombre'], 0, 3).substr($datos_usuario['Apellido'], 0, 3)."Coo".$id;
				$carpeta = "ficheros/usuarios/Coordinador/".$id;
			}else {
				$password = base64_encode("P@user&rmd#");
				$id = $this->select("SELECT Usuario_idUsuario FROM Profesor ORDER BY Profesor.Usuario_idUsuario DESC LIMIT 1")->fetch()[0] + 1;
				$usuario = substr($datos_usuario['Nombre'], 0, 3).substr($datos_usuario['Apellido'], 0, 3)."Pro".$id;
				$carpeta = "ficheros/usuarios/Profesor/".$id;
			}

			$this->insert("Usuario",[
				'idUsuario	' => $id,
				'Registro' => $fecha_ingresar,
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

		/**
		* Obtiene todas las asignaturas almacenadas en la base de datos
		* @param arreglo con las asignaturas obtenidas
		**/
		public function get_asignaturas()
		{
			$query = $this->select("SELECT * FROM Asignatura");

			$datos = array();
			while ($row = $query->fetch()) {
				array_push($datos,array($row[0],$row[1]));
			}
			return $datos;
		}


		/**
		* Obtiene todas los tipos de documentos almacenados en la base de datos
		* @param arreglo con los tipos de documentos obtenidos
		**/
		public function get_tipo()
		{
			$query = $this->select("SELECT Nombre FROM Tipo");

			$datos = array();
			while ($row = $query->fetch()) {
				array_push($datos,$row[0]);
			}
			return $datos;
		}


		/**
		* Metodo que almacena un nuevo material en la base de datos
		* @param $datos informacion que tendra el material en la base de datos
		* @param $archivo documento que se almacenara en caso de existir
		* @param $carpeta ubicacion en la que se almacenara el documento
		**/
		public function save_Material($datos,$archivo,$carpeta)
		{
			$aux = ((integer)((string)$_SESSION['ID'])[0] == 2) ? "Coordinador":"Profesor";
			$aux = $aux."_Usuario_idUsuario";
			
			$id = $this->select("SELECT idArchivo FROM Archivo ORDER BY Archivo.idArchivo DESC LIMIT 1")->fetch()[0] + 1;

			$ubicacion = "";
			if (strcmp($datos['Direccion'],"")) {
				$ubicacion = $datos['Direccion'];
			}elseif (strcmp($datos['Cantidad'],"")){
				$ubicacion = $datos['Nombre'];
			}elseif (isset($_FILES)){
				$ubicacion = $archivo['Archivo']['name'];
			}

			$this->insert( "Archivo",[
				'idArchivo' => $id,
				$aux => $_SESSION['ID'],
				'Nombre' => $datos['Nombre'],
				'Descripcion' => $datos['Descripcion'],
				'Asignatura_idAsignatura' => $datos['Asignatura'],
				'Ubicacion' => $ubicacion,
			]);

			if (strcmp($datos['Direccion'],"")) {
				$this->insert( "Video",[
					'Archivo_idArchivo' => $id,
					'Duracion' => 5,
				]);
			}elseif (strcmp($datos['Cantidad'],"")) {
				$this->insert( "Cuestionario",[
					'Archivo_idArchivo' => $id,
				]);
			}elseif (isset($_FILES)) {
				$tipo = $this->select("SELECT idTipo FROM Tipo WHERE Nombre = '".substr($archivo['Archivo']['type'],-3,strlen($archivo['Archivo']['type']))."'")->fetch()[0];
				$this->insert( "Documento",[
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
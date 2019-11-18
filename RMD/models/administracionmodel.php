<?php 
	/**
	 * Funcion encargada de manejar la informacion
	 * para una sesion iniciada
	 * @author Jesus Rivera
	**/
	class AdministracionModel extends Model
	{
		/**
		 * Constructor de la clase
		**/
		function __construct()
		{
			parent::__construct();
		}

		/**
		* Obtiene todos los mensajes de un usuario especifico
		* @param $id id del usuario del que se mostraran los mensajes
		* @return arreglo con mensajes 
		**/
		public function get_mensajes($id)
		{
			$consulta = $this->select("SELECT Mensaje.Contenido as Mensaje, Mensaje_recibido.Fecha as Fecha,Mensaje_recibido.Mensaje_idMensaje as Id FROM (Mensaje JOIN Mensaje_recibido ON Mensaje.idMensaje = Mensaje_recibido.Mensaje_idMensaje) WHERE Mensaje_recibido.Usuario_idUsuario = ".$id." ORDER BY Mensaje_recibido.Fecha DESC");

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
				$aux[4] = $this->select("SELECT Usuario.Usuario FROM (Mensaje_enviado JOIN Usuario ON Mensaje_enviado.Usuario_idUsuario = Usuario.idUsuario) WHERE Mensaje_enviado.Mensaje_idMensaje = ".$aux[5])->fetch()[0];
				array_push($datos,$aux);
			}
			$final = array();
			array_push($final,$datos);
			$consulta = $this->select("SELECT Mensaje.Contenido as Mensaje, Mensaje_enviado.Fecha as Fecha,Mensaje_enviado.Mensaje_idMensaje as Id FROM (Mensaje JOIN Mensaje_enviado ON Mensaje.idMensaje = Mensaje_enviado.Mensaje_idMensaje) WHERE Mensaje_enviado.Usuario_idUsuario = ".$id." ORDER BY Mensaje_enviado.Fecha DESC");

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
				$aux[4] = $this->select("SELECT Usuario.Usuario FROM (Mensaje_recibido JOIN Usuario ON Mensaje_recibido.Usuario_idUsuario = Usuario.idUsuario) WHERE Mensaje_recibido.Mensaje_idMensaje = ".$aux[5])->fetch()[0];
				array_push($datos,$aux);
			}
			array_push($final,$datos);
			return $final;
		}

		/**
		* Obtiene todos los materiales guardados de un usuario especifico
		* @param $id id del usuario del que se mostraran los materiales guardados
		* @return arreglo con datos del material
		**/
		public function material_guardado($id)
		{
			$consulta = $this->select("SELECT archivo.idArchivo,archivo.Nombre,archivo.Descripcion FROM (archivo JOIN archivo_guardado ON archivo.idArchivo = archivo_guardado.Archivo_idArchivo) WHERE archivo_guardado.Usuario_idUsuario = ".$id);
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

		/**
		* Obtiene todos los mensajes del remitente de un usuario
		* @param $id id del usuario quien envio el mensaje
		* @return arreglo con mensajes 
		**/
		public function get_mensaje_remitente($id)
		{
			$consulta = $this->select("SELECT Usuario.idUsuario,Usuario.Nombre,Usuario.Apellido,Usuario.Usuario,Usuario.Correo,Usuario.Genero FROM (Mensaje_enviado JOIN Usuario ON Mensaje_enviado.Usuario_idUsuario = Usuario.idUsuario) WHERE Mensaje_enviado.Mensaje_idMensaje = ".$id)->fetch();
			$datos = array();
			for ($i = 0; $i < sizeof($consulta)/2; $i++) { 
				array_push($datos,$consulta[$i]);
			}

			$consulta = $this->select("SELECT Mensaje_recibido.Fecha,Mensaje.Contenido FROM (Mensaje JOIN Mensaje_recibido ON Mensaje.idMensaje = Mensaje_recibido.Mensaje_idMensaje) WHERE Mensaje.idMensaje = ".$id)->fetch();

			for ($i = 0; $i < sizeof($consulta)/2; $i++) { 
				array_push($datos,$consulta[$i]);
			}



			 if($this->select("SELECT alumno.Usuario_idUsuario FROM `alumno` WHERE alumno.Usuario_idUsuario = ".$datos[0])->fetch())
			{
				array_push($datos,"Alumno");
			} elseif ($this->select("SELECT profesor.Usuario_idUsuario FROM `profesor` WHERE profesor.Usuario_idUsuario = ".$datos[0])->fetch()) {
				array_push($datos,"Profesor");
			} elseif ($this->select("SELECT coordinador.Usuario_idUsuario FROM `coordinador` WHERE coordinador.Usuario_idUsuario = ".$datos[0])->fetch()) {
				array_push($datos,"Coordinador");
			}

			return $datos;
		}

		/**
		* Metodo encargado de enviar un mensaje a un usuario especifico
		* @param $destinatario Usuario a quien se le enviara el mensaje
		* @param $mensaje Mensaje que se enviara
		**/
		public function enviar_mensaje($destinatario,$mensaje)
		{
			$destinatario_id = $this->select("SELECT Usuario.idUsuario FROM Usuario WHERE Usuario.Usuario = '".$destinatario."'")->fetch()[0];
			$fecha = getdate();
			$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
			$id = $this->select("SELECT Mensaje.idMensaje FROM Mensaje ORDER BY idMensaje DESC LIMIT 1")->fetch()[0] + 1;
			$this->insert("Mensaje",[
				'idMensaje' => $id,
				'Contenido' => $mensaje,
			]);

			$this->insert("Mensaje_enviado",[
				'Usuario_idUsuario' => $_SESSION['ID'],
				'Mensaje_idMensaje' => $id,
				'Fecha' => $fecha_ingresar,
			]);

			$this->insert("Mensaje_recibido",[
				'Usuario_idUsuario' => $destinatario_id,
				'Mensaje_idMensaje' => $id,
				'Fecha' => $fecha_ingresar,
			]);
		}

	}
 ?>
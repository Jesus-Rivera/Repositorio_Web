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


		public function get_mensajes($id)
		{
			$consulta = $this->select("SELECT mensaje.Contenido as Mensaje, mensaje_recibido.Fecha as Fecha,mensaje_recibido.Mensaje_idMensaje as Id FROM (mensaje JOIN mensaje_recibido ON mensaje.idMensaje = mensaje_recibido.Mensaje_idMensaje) WHERE mensaje_recibido.Usuario_idUsuario = ".$id." ORDER BY mensaje_recibido.Fecha DESC");

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
				$aux[4] = $this->select("SELECT usuario.Usuario FROM (mensaje_enviado JOIN usuario ON mensaje_enviado.Usuario_idUsuario = usuario.idUsuario) WHERE mensaje_enviado.Mensaje_idMensaje = ".$aux[5])->fetch()[0];
				array_push($datos,$aux);
			}
			$final = array();
			array_push($final,$datos);
			$consulta = $this->select("SELECT mensaje.Contenido as Mensaje, mensaje_enviado.Fecha as Fecha,mensaje_enviado.Mensaje_idMensaje as Id FROM (mensaje JOIN mensaje_enviado ON mensaje.idMensaje = mensaje_enviado.Mensaje_idMensaje) WHERE mensaje_enviado.Usuario_idUsuario = ".$id." ORDER BY mensaje_enviado.Fecha DESC");

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
				$aux[4] = $this->select("SELECT usuario.Usuario FROM (mensaje_recibido JOIN usuario ON mensaje_recibido.Usuario_idUsuario = usuario.idUsuario) WHERE mensaje_recibido.Mensaje_idMensaje = ".$aux[5])->fetch()[0];
				array_push($datos,$aux);
			}
			array_push($final,$datos);
			return $final;
		}

		public function get_inf($id)
		{
			$consulta = "SELECT Nombre,Apellido,Usuario,Correo,Telefono,Fecha_Nacimiento,Pais,Estado,Ciudad FROM Usuario WHERE Usuario.idUsuario = ".$id;

			$query = $this->select($consulta)->fetch();
			$datos = array();
			for ($i=0; $i < sizeof($query)/2; $i++) { 
					array_push($datos,$query[$i]);	
				}
			$nacimiento = new DateTime($datos[5]);
		    $hoy = new DateTime();
		    $datos[5] = $hoy->diff($nacimiento)->y;
			return json_encode($datos);
		}

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

		public function get_mensaje_remitente($id)
		{
			$consulta = $this->select("SELECT Usuario.idUsuario,Usuario.Nombre,Usuario.Apellido,usuario.Usuario,Usuario.Correo FROM (mensaje_enviado JOIN usuario ON mensaje_enviado.Usuario_idUsuario = usuario.idUsuario) WHERE mensaje_enviado.Mensaje_idMensaje = ".$id)->fetch();
			$datos = array();
			for ($i = 0; $i < sizeof($consulta)/2; $i++) { 
				array_push($datos,$consulta[$i]);
			}

			$consulta = $this->select("SELECT mensaje_recibido.Fecha,mensaje.Contenido FROM (mensaje JOIN mensaje_recibido ON mensaje.idMensaje = mensaje_recibido.Mensaje_idMensaje) WHERE mensaje.idMensaje = ".$id)->fetch();

			for ($i = 0; $i < sizeof($consulta)/2; $i++) { 
				array_push($datos,$consulta[$i]);
			}

			return $datos;
		}

		public function enviar_mensaje($destinatario,$mensaje)
		{
			$destinatario_id = $this->select("SELECT usuario.idUsuario FROM usuario WHERE usuario.usuario = '".$destinatario."'")->fetch()[0];
			$fecha = getdate();
			$fecha_ingresar = $fecha['year']."-".$fecha['mon']."-".$fecha['mday']." ".$fecha['hours'].":".$fecha['minutes'].":".$fecha['seconds'];
			$id = $this->select("SELECT mensaje.idMensaje FROM mensaje ORDER BY idMensaje DESC LIMIT 1")->fetch()[0] + 1;
			$this->insert("mensaje",[
				'idMensaje' => $id,
				'Contenido' => $mensaje,
			]);

			$this->insert("mensaje_enviado",[
				'Usuario_idUsuario' => $_SESSION['ID'],
				'Mensaje_idMensaje' => $id,
				'Fecha' => $fecha_ingresar,
			]);

			$this->insert("mensaje_recibido",[
				'Usuario_idUsuario' => $destinatario_id,
				'Mensaje_idMensaje' => $id,
				'Fecha' => $fecha_ingresar,
			]);
		}

	}
 ?>
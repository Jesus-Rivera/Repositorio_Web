<?php 
	/**
	 * Funcion encargada de manejar la informacion
	 * para una sesion iniciada
	 * @author Jesus Rivera
	**/
	class PrincipalModel extends Model
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
			$consulta = $this->select("SELECT mensaje.Contenido as Mensaje, mensaje_recibido.Fecha as Fecha FROM (mensaje JOIN mensaje_recibido ON mensaje.idMensaje = mensaje_recibido.Mensaje_idMensaje) WHERE mensaje_recibido.Usuario_idUsuario = ".$id);

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
				array_push($datos,$aux);
			}
			$final = array();
			array_push($final,$datos);
			$consulta = $this->select("SELECT mensaje.Contenido as Mensaje, mensaje_enviado.Fecha as Fecha FROM (mensaje JOIN mensaje_enviado ON mensaje.idMensaje = mensaje_enviado.Mensaje_idMensaje) WHERE mensaje_enviado.Usuario_idUsuario = ".$id);

			$datos = array();
			while ($row = $consulta->fetch()) {
				$aux = array();
				foreach ($row as $value) {
					array_push($aux,$value);
				}
				unset($aux[1]);
				unset($aux[3]);
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

	}
 ?>
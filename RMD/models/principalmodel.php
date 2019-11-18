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


		/**
		* Obtiene la informacion de varios mensajes
		* @param $id identificador del usuario
		* @return arreglo con los mensajes que se obtuvieron del usuario
		**/
		public function get_mensajes($id)
		{
			$consulta = $this->select("SELECT Mensaje.Contenido as Mensaje, Mensaje_recibido.Fecha as Fecha FROM (Mensaje JOIN Mensaje_recibido ON Mensaje.idMensaje = Mensaje_recibido.Mensaje_idMensaje) WHERE Mensaje_recibido.Usuario_idUsuario = ".$id);

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
			$consulta = $this->select("SELECT Mensaje.Contenido as Mensaje, Mensaje_enviado.Fecha as Fecha FROM (Mensaje JOIN Mensaje_enviado ON Mensaje.idMensaje = Mensaje_enviado.Mensaje_idMensaje) WHERE Mensaje_enviado.Usuario_idUsuario = ".$id);

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
	}
 ?>
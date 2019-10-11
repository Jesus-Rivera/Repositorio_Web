<?php 
	/**
	* Clase controller, se encarga de crear
	* los metodos que heredaran todos 
	* los controladores
	* @author Jesus Rivera 
	**/
	class Controller
	{
		/**
		* Constructor de la clase
		**/	
		function __construct()
		{
			$this->view = new View();
		}

		/**
		 * Funcion que carga un modelo en el controlador
		 * @param string $model Nombre del modelo a cargar
		**/
		function loadModel($model)
		{
			$url = 'models/'.$model.'model.php';
			if (file_exists($url)) 
			{
				require_once($url);
				$modelName = $model.'Model';
				$this->model = new $modelName();
			}
		}

	}

 ?>
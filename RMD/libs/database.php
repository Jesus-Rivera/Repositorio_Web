<?php 
	/**
	 * Clase encargada del manejo de la base de datos
	 * @author Jesus Rivera
	*/
	class Database
	{
		/**
		 * Variables para uso de la base de datos
		 * @var $host,$db,$user,$password,$charset string con los datos de la base
		**/
		private $host;
		private $db;
		private $user;
		private $password;
		private $charset;

		/**
		 * Constructor de la clase, en el cual se 
		 * se asignan los valores de las constantes globales
		**/
		function __construct()
		{
			$this->host = constant('HOST');
			$this->db = constant('DB');
			$this->user = constant('USER');
			$this->password = constant('PASSWORD');
			$this->charset = constant('CHARSET');
		}

		/**
		 * Funcion que realiza la coneccion con la base de datos
		**/
		function connect()
		{
			try
			{
				$connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
				$options = [
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES => false,
				];
				$pdo = new PDO($connection,$this->user,$this->password,$options);
				return $pdo;
			}catch(PDOException $e)
			{
				print_r('Error connection: '.$e->getMessage());
			}
		}
	}

 ?>
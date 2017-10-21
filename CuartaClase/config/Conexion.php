<?php 
header('Content-type: application/json');
	Class Conexion{
		public $host;
		public $password;
		public $user;
		public $database;
		public $drive;
		public $con;
		public $credenciales;

		public function __construct(){
			$this->credenciales=include 'database.php';
			$this->host=$this->credenciales['host'];
			$this->password=$this->credenciales['password'];
			$this->user=$this->credenciales['user'];
			$this->database=$this->credenciales['database'];
			$this->driver=$this->credenciales['driver'];
			$this->conexion();
		}
		public function conexion(){
			switch($this->driver){
				case 'mysql':
					$con=new mysqli($this->host,$this->user,$this->password,$this->database);

				break;
				case 'oracle':

				break; 
				default:
					$con=new mysqli($this->host,$this->user,$this->password,$this->database);
				break;
			}
			$this->con=$con;
		}
	}

?>
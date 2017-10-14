<?php 
	Class Persona{

		/****/
		//Atributos


		public $nombre,$apellidos,$fNacimiento,$genero,$altura,$nacionalidad,
		$estadoCivil,$distanciaRecorrida;





		//Metodos


		public function __construct($nombre){
			$this->nombre='Sin Nombre';
			$this->fNacimiento='2017/10/14';
			$this->estadoCivil="solter@";
			$this->distanciaRecorrida=0;
			#echo "se essta generando un nuevo objeto ".$nombre;
		}

		public function saludar(){
			echo 'Saludando como persona';
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		public function correr($tiempo){
			$this->distanciaRecorrida+=($tiempo*10);
			//$this->distanciaRecorrida=$this->distanciaRecorrida+12;
			return "Distancia recorrida :".$this->distanciaRecorrida.' km. <br>';
		}
	}


/*
	$persona=new Persona("Dante");


	echo '<br>';
	echo $persona->nombre;
	var_dump($persona);

	echo '<br>';
	$persona->saludar();

	echo $persona->getNombre();
	$persona->setNombre("Dante");
	echo '<br>';
	echo $persona->getNombre();
	echo $persona->correr(1);
	echo $persona->correr(3);
*/
?>
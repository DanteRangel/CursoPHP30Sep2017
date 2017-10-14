<?php 
	include './Persona.php';
	Class Alumno extends Persona{ //HERENCIA
		public $noCuenta,$noSemestre,$carrera,$promedio;
		public function __construct($nombre){
			$this->noCuenta='asdasdasd';
			$this->noSemestre='';
			$this->carrera='';
			$this->promedio='';
			#echo 'hola que hace';
		}
		public function saludar(){  //SOBRE ESCRITURA DE METODOS
			echo 'Saludando como alumno';
		}
		public function tarea(){
			echo "Estoy haciendo tarea";
		}
	}

	$alumno=new Alumno('DANTE');
	#$alumno->saludar();
	echo $alumno->getNombre();
	$personas=[new Persona("Dante"),new Alumno("Judith")];
	#echo json_encode($personas,true);
	var_dump($personas);
	for($i=0;$i<count($personas);$i++){
		$personas[$i]->saludar();
		echo '<br>';
	}
?>
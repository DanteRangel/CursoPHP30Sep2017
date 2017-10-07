<?php 
class Automovil{

	public $kmRecorrido, $color, $numParticipante;

	public function __construct ($color, $numParticipante){
		$this ->color=$color;
		$this ->numParticipante=$numParticipante;
		$this ->kmRecorrido = 0;
	}

	public function setkmRecorrido($km){
		$this ->kmRecorrido = $km;
	}

	public function getKmRecorrido(){
		return $this ->kmRecorrido;
	}
}



?>
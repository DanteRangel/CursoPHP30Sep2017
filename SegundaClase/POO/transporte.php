<?php
class Transporte{
	/***  Atributos***/
	/***  Caracteristicas***/
/*
		ESPECFICADORES DE ACCESO
			1 public
			2 private
			3 protected
*/


	public $velocidad,$capacidad,$peso,$tamaño,
	$distaciaRecorrida,$serie,$origen,$destino,
	$porcentajeCombustible;

	/***  Metodos***/
	/***  Comportamiemto***/

	public function __construct($serie){
		$this->serie=$serie;
		$this->velocidad='120km';


	}
	public function viaje($origen,$destino){
		$this->origen=$origen;
		$this->destino=$destino;
		echo 'Estas viajando de '.$origen." a ".$destino;
	}
	public function cargar_combustible($porcentajeCombustible){
		$this->porcentajeCombustible=$porcentajeCombustible;
	}

}




$transporte=new Transporte("serie");
$transporte->viaje("Mexico DF","Puerto Vallarta");
var_dump($transporte);
var_dump(1);






?>
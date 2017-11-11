<?php
	include APP_PATH.'/config/Model.php';
	Class Product extends Model{
		public $table="Producto";
		public $atributos=['id','nombre','descripcion','stock','precio'];
		public $primaryKey="id";
	}

/*	$producto=new Product();
	echo $producto->all();
*/
?>
<?php
	include APP_PATH.'/config/Model.php';
	Class User extends Model{
		public $table='Usuario';
		public $atributos=['id','nombre','correo','tipo'];
		public $primaryKey='id';
	}

?>
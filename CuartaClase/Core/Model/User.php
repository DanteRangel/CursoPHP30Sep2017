<?php 
	include './Model.php';
	Class User extends Model{
		public $atributos=['id','nombre','correo','tipo'];
		public $table='Usuario';
		public $primaryKey='id';

	}


	/*$user=new User();
	$atributos=['id','nombre'];*/
	#echo $user->all($atributos);
	#User::destroy([1]);
	User::create([
		'nombre'=>'Esteban',
		'correo'=>'esteba@google.com',
		'tipo'=>1
		]);
?>
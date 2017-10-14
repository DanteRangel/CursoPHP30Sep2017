<?php 

	$host='localhost';
	$pass="311332065";
	$user='root';
	$database='CursoPHP';


	$conexion=mysqli_connect($host,$user,$pass,$database) 
		or die('Error en la conexions');
	//var_dump($conexion);
	#var_dump(mysqli_fetch_array($resultado));
	/*while($elementos=mysqli_fetch_array($resultado)){
		echo $elementos['correo'].'<br>';
	}*/
?>
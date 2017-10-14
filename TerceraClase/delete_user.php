<?php 
	include './conexion.php';

	if(isset($_POST['method']) && $_POST['method']=='DELETE' && isset($_POST['id']) && $_POST['id']!=null){
		$id=$_POST['id'];
		$resultado=true;
		$sql='DELETE FROM Usuario where id='.$id;	

		$resultado=mysqli_query($conexion,$sql);
		if($resultado){
			//return json_encode(array(''))
			echo "success";
		}
	}
	
?>
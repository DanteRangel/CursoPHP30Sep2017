<?php 
	include './conexion.php';

	$sql="SELECT * FROM Usuario";
	$resultado=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 2em;">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<table class="table table-responsive table-striped">
	<thead>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Tipo</th>
		<th>Acciones</th>
	</thead>
	<tbody>
		<?php
		while($elementos=mysqli_fetch_array($resultado)){
			?>
			<tr id="tr_<?php echo $elementos['id'];?>">
				<td><?php echo $elementos['nombre'];?></td>
				<td><?php echo $elementos['correo'];?></td>
				<td><?php echo $elementos['tipo'];?></td>
				<td>
					<button class="btn btn-xs btn-info" onclick="editar(<?php echo $elementos['id'];?>)">Editar</button>
					<button class="btn btn-xs btn-danger" onclick="eliminar(<?php echo $elementos['id'];?>)">Eliminar</button>
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
</table>
	</div>
</div>	
</div>
<script>
	function editar(id){
		console.log(id);
	}
	function eliminar(id){
		/*
		https://www.facebook.com/UNILADTech/videos/2021793774765000/?hc_ref=ARRy9LJJ3iPqMorX3ZMUyCzPpIweJkan3SNcttPzPRExMS-jn3gIBrsRwICt-vwXsMo&pnref=story
		*/

		$.ajax({
			url:'./delete_user.php',
			data:{'method':'DELETE','id':id},
			type:'POST',
			success:function(response){
				console.log(response);
				if(response=='success')
					$('#tr_'+id).remove();
			}

		});

	}
</script>
	
</body>
</html>
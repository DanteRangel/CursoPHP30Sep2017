<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<table class="table table-responsive">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Ocupacion</th>
			<th>Acciones</th>
		</thead>
		<tbody>
	<?php 
/*	for($i=1;$i<=10;$i++){
		echo '3 x '.$i.' = '.($i*3).'<br>';
	}

	$arreglo=array();
	$arreglo[0]='Patricia';
	$arreglo[1]='Robles';
	$arreglo[2]='Ama de casa';


	'nombre':'Patricia',
	'apellido':'Robles',
	'ocupacion':'Ama de casa'    


	$arregloAsoc=array();
	$arregloAsoc['nombre']='Patricia';
	$arregloAsoc['apellida']='Robles';
	$arregloAsoc['ocupacion']='Ama de casa';
	$arregloAsoc['escuela']=array();
	$arregloAsoc['escuela']['nombre']='FCA';


	

	for($i=0;$i<count($arreglo_numeros);$i++){
		echo $arreglo_numeros[$i];
	}

	#echo $arregloAsoc[''];
	/*for($i=0;$i<count($arregloAsoc);$i++){
		echo $arregloAsoc[$i];
	}*/
	$arreglo_numeros=array(0,1,2,3,4,5,6,7,8,9,10);
	$arregloAsoc2=array(
		array(
			"nombre"=>'Dante',
			"apellido"=>"Rangel",
			"ocupacion"=>"Instructor"
			),
		array(
			"nombre"=>"Marco",
			"apellido"=>"Gonzales",
			"ocupacion"=>"Asistente"
			),
		array(
			"nombre"=>"Judith",
			"apellido"=>"Garcia",
			"ocupacion"=>"Asistente"
			)
		);

	#echo $arregloAsoc2[2]["nombre"].'<br>';
	##var_dump($arregloAsoc);




	for($i=0;$i<count($arregloAsoc2);$i++){
		echo '<tr id="elemento_'.$i.'">';
		foreach ($arregloAsoc2[$i] as $llave => $value) {
			#echo 'arregloAsoc2['.$i.']["'.$llave.'"]='.$value.'<br>';
			echo '<td class="escucha">'.$value.'</td>';
		}

		echo '<td><button class="btn btn-danger" onclick="eliminar('.$i.')">Eliminar</button></td>';
		echo '</tr>';
	}
	foreach ($arregloAsoc2 as $key => $value) {
		echo $key.' '.var_dump($value).'<br>';
	}
	foreach ($arreglo_numeros as $key => $value) {
		echo $key.' '.$value.'<br>';
	}
	$contador=0;
	while($contador<10){
		echo $contador."<br>";
		$contador++;
	}
$contador=0;
$bandera=true;
	do{
		echo "Hola<br>";

		$contador++;
	}while($contador<=10);
?>
	</tbody>
</table>
<script>
	function eliminar(id){
		$('#elemento_'+id).remove();
		$('.escucha').click(function(){
			alert();
		});
		//document.getElmentById('elemento_'+id);
	}
</script>
</body>
</html>

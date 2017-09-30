<?php
	#ESTRCUTURAS DE CONTROL


if(isset($_POST['menu'])){


		#IF
		$eleccion="";
		$edad=61;
		$genero='h';
		$estadoCivil='soltero';
		/*if($edad>18 && $genero=='h' && $estadoCivil!='soltero'){
			echo "Bienvendido al area de deportes";
		}
		if($edad>=18 && $genero=='m'){
			echo 'Bienvenida al area de lenceria';
		}
		if($edad>40 && $genero=='h' && $estadoCivil!='soltero'){
			echo "Bienvenido al area de vinos y licores";
		}*/

		/*if($genero=='h'){

		}else{

		}
		if($edad>35 && $genero=='m' && $estadoCivil=='casado'){
			echo 'Ĺinea blanca';
		}
		if($edad>35 && $genero=='m' && $estadoCivil=='soltero'){
			echo 'Damas';
		}
		if($edad>15 && $genero=='m' && $estadoCivil=='soltero'){
			echo 'Deportes';
		}
		if($edad<15){
			echo 'Jugueteria';
		}
		if($edad>35 && $genero=='h' && $estadoCivil=='casado'){
			echo 'Vinos y licores';
		}
		if($edad>25 && $genero=='h' && $estadoCivil=='soltero'){
			echo 'Electronica';
		}
		echo '<br>';
		if($edad>=8 && $edad<=50){
			if($estadoCivil=='casado'){
				echo "Manten a tu familia huevón y trabaja doble!!1";
			}else{
				echo "Comprate un carro";
			}
		}else if($edad>50){
			if($estadoCivil=='casado'){
				echo "Ama a tu projimo";
			}else{
				echo "Ya casate!!!!";
			}
			
		}else{
			echo "No puedes trabajar";
		}
		*/
		/*$arregloAsociativo=array(
			"nombre"=>'Dante',
			"apellido"=>'Rangel',
			"escuela"=>array(
					"nombre":"Facultad de contaduria y administracion",
					"direccion":"CU"
				)
			);*/
		#echo $arregloAsociativo["escuela"]["nombre"];
		$comida=$_POST['menu'];
		switch ($comida) {
			case 'desayuno':
			case 'Desayuno':
			case 'DESAYUNO':
				$eleccion= "Tenemos huevos rancheros";
			break;
			case 'comida':
				$eleccion= 'Tenmos consome, con arroz y huevo y de plato fuerte pechuga azada con verdura';
			break;
			case 'cena':
				$eleccion= "Cafe con leche y un pedazo de pan";
			break;
			default:
				$eleccion= "Gomitas, Papas,Gorditas, y anexas...";
				break;
		}


	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="./estructuradeControl.php" method="POST">
		<label for=""> Menu</label>
		<select name="menu" id="menu">
			<option value="desayuno">Desayuno</option>
			<option value="comida">Comida</option>
			<option value="cena">Cena</option>
		</select>
		<input type="submit" value="Enviar">
	</form>
	<?php
		echo $eleccion;
		?>
</body>
</html>

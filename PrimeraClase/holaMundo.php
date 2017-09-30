<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
	<?php 
		#echo "Hola mundo desde PHP en TecGurus<br>";
		$variable=1.43;
		#echo $variable;
		#var_dump($variable);
		#echo '<br>';
		$variable=$variable."px";
		#var_dump($variable);
		$boolean=true;
		$arreglo=array(1,2,3,4,5,6,7,8,12);
		$arreglo2=[1,2,3,4,5,6,7,8,12];
		#$persona=new Persona();
		#var_dump($arreglo);
		#var_dump($arreglo2);

		$probando=1; //OPERADOR DE ASIGNACION
		$probando+=1;  //suma y asignacion
		$probando=$probando+1;
		$probando-=1; //resta y asignacion
		$probando=$probando-1;
		$probando*=2; //multiplicacion y asignacion
		$probando=$probando*2;
		$probando/=2; //division y asignacion
		$probando=$probando/2;
		$probando%=2;  //modulo y asignacion
		$probando=$probando%2;
		if(1==1){
		#	echo "es uno";
		}else{
		#	echo "no es un uno";
			
		}
		#echo (1==1)?'es uno':'no es un uno';
		#OPERADORES ARITMETICOS
		$probando++; //incremento
		$probando--; //decremento
		$probando=$probando+$probando; //suma
		$probando=$probando-$probando; //resta
		$probando=$probando*$probando; //multiplicacion
		$probando=$probando/$probando; //division

		#OPERADORES DE COMPARACION
		echo ("1"==1)?'es uno':'no es un uno'; #IGUAL
		echo '<br>';
		echo ("1"===1)?'es identico':'no es identico'; #COMPARA EL CONTENIDO Y EL TIPO DE DATO 
		echo '<br>';
		echo (1!="2")?'si es diferente':'no es diferente'; #Compara si los elementos son distintos
		echo '<br>';
		echo (1!=="2")?'no es identico':'si es identico'; #Compara que no sean identicos
		echo '<br>';
		echo (1<3)?'es menor':'es mayor';
		echo '<br>';
		echo (3>1)?'es mayor':'es menor';
		echo '<br>';
		echo (2>=2)?'es cierto':'es falso';
		echo '<br>';
		echo (2<=2)?'es cierto':'es falso';
		//$html='<div class="col-md-3"></div>';
		#OPERADORES LOGICOS
		echo '<br>';
		#       1        0         0            1
		echo (23>18 && 28<23)?' es verdadero':'es false';
		echo '<br>';
		#        0       1            1           0
		echo (23>25 || 23>15)?' es verdadero':'es falso';
		echo '<br>';
			#   false==true
		echo (!(true==false))?'es verdadero':'es falso';
		/*&&  AND and
		||  OR or
		!true=false;*/

/*
asadf
asdfsadf
asdf
asdfas
*/
#fsafsasdas
	 ?>
</body> 
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php
	if(isset($_POST['color1']) && isset($_POST['color2']) && isset($_POST['serie1']) && isset($_POST['serie2'])){


		$auto1=new Automovil($_POST['color1'],$_POSR['serie1']);
		$auto1=new Automovil($_POST['color1'],$_POSR['serie1']);
?>
	<form action="./carrera.php" method="POST">
				<input type="hidden" name="color1" value="<?php echo $_POST['color1'];?>">
				<input type="hidden" name="color2" value="<?php echo $_POST['color2'];?>">
				<input type="hidden" name="serie1" value="<?php echo $_POST['serie1'];?>">
				<input type="hidden" name="serie2" value="<?php echo $_POST['serie2'];?>">
				<?php
				if(isset($_POST['kmRecorridos1'] )&&isset($_POST['kmRecorridos1'] )){
					$auto1->setKmRecorrido=$_POST['kmRecorridos1'];
					$auto2->setKmRecorrido=$_POST['kmRecorridos2'];
				?>
			<label for="">Avanzar Auto 1</label>
				<input type="text" name="kmRecorridos1">
			<label for="">Avanzar Auto 2</label>
				<input type="text" name="kmRecorridos2">
			<input type="submit" value="Enviar">
			<?php
		}
			?>
	</form>
<?php
	}else{
		?>
			<form action="./carrera.php" method="POST">
			<label for="">Color A1</label>
				<input type="text" name="color1">
			<label for="">Color A2</label>
				<input type="text" name="color2">
			<label for="">Serie A1</label>
				<input type="text" name="serie1">
			<label for="">Serie A2</label>
				<input type="text" name="serie2">
				<input type="submit" value="Enviar">
			</form>
		<?php
	}
?>
	
</body>
</html>
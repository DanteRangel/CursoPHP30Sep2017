
<form action="./?controller=User&method=update" method="POST">
	<div class="row">
	<input type="hidden" name="id" value="<?php echo $user['id'];?>">
		<div class="col-md-4">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="<?php echo $user['nombre']?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="">Correo</label>
				<input type="text" name="correo" class="form-control" value="<?php echo $user['correo']?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="">Tipo</label>
				<select name="tipo" id="tipo" class="form-control">
					<option <?php echo $user['tipo']==1?' selected ':'';?> value="1">Administrador</option>
					<option <?php echo $user['tipo']==2?' selected ':'';?> value="2">Staff</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="submit" value="Guardar" class="btn btn-dark">
			</div>
		</div>

	</div>
</form>
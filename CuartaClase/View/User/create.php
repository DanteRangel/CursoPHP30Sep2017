<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<form action="./?controller=User&method=save" method="POST">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="tipo">Tipo usuario</label>
							<select name="tipo" id="tipo" class="form-control">
								<option value="1">Administrador</option>
								<option value="2">Staff</option>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="correo	">Correo</label>
							<input type="text" name="correo" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-12 text-right">
						<input type="submit" value="Guardar" class="btn btn-dark ">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<form action="./?controller=Authenticate&method=login" method="POST">
				<div class="row">			
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
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="password">Contraseña</label>
							<input type="password" name="password" value="" class="form-control">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
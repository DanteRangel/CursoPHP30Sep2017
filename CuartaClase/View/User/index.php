<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<legend>Usuarios</legend>
		</div>
	</div>
	<div class="row" style="margin-top: 40px;">
		<div class="col-md-8 col-md-offset-2">
			<div class="row text-right" style="margin-right: .001em;">
				<a class="btn btn-info" href="./?controller=User&method=create">Crear usuario</a>
			</div>
			<div class="table-responsive">
				<table class="table table-striped jambo_table">
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Tipo</th>
						<th>Acciones</th>
					</thead>
					<tbody>
					<?php
						foreach ($users as $llave => $u) {
						?>
								<tr id="tr_<?php echo $u['id'];?>">
									<td><?php echo $u['nombre'];?></td>
									<td><?php echo $u['correo'];?></td>
									<td>
										<b><?php echo $u['tipo']==1?'Administrador':'Staff';?>
										</b>
									</td>
									<td>
										<button class="btn btn-dark" onclick="modificar(<?php echo $u['id'];?>);">Modificar</button>
										<button class="btn btn-danger" onclick="eliminar(<?php echo $u['id'];?>)">Eliminar</button>
										
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
</div>
<script>
	function eliminar(id){
		$.ajax({
			'url':'./?controller=User&method=delete',
			'data':{'id':id},
			'type':'POST',
			success:function(response){
				console.log(response);
				if(response.code==1){
					$('#tr_'+id).remove();
				}else{
					alert('Error en el servidor');
				}
			}

		});
	}
	function modificar(id){
		window.location='./?controller=User&method=edit&id='+id;
	}
</script>
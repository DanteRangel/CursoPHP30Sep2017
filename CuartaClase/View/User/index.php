<br>


<table class="table table-responsive table-striped jambo_table">
	<thead>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Tipo</th>
		<th>Acciones</th>
	</thead>
	<tbody>
		
	<?php 
		foreach($users as $user){
		?>
		<tr>
			<td><?php echo $user['nombre'];?></td>
			<td><?php echo $user['correo'];?></td>
			<td><b><?php echo $user['tipo']==1?'Administrador':'Staff';?></b></td>
			<td> 
				<button class="btn btn-dark btn-xs" onclick="modificar(<?php echo $user['id'];?>)">Modificar </button>
				<button class="btn btn-danger btn-xs" onclick="eliminar(<?php echo $user['id'];?>)">Eliminar </button>
			</td>
		</tr>

		<?php
		}
	?>
	</tbody>
</table>

<script>
	function modificar(id){
		window.location="./?controller=User&method=edit&id="+id;
	}
</script>
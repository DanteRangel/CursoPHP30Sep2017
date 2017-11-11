<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<legend>Carrito</legend>
		</div>
	</div>
	<div class="row" style="margin-top: 40px;">
		<div class="col-md-8 col-md-offset-2">
			<button onclick="destroyCar()" class="btn btn-warning">Eliminar todo el carrito</button>
			<div class="table-responsive">
				<table class="table table-striped jambo_table">
					<thead>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Stock</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Acciones</th>
					</thead>
					<tbody>
					<?php
						foreach ($products as $llave => $p) {
						?>
						<tr>
							<td><?php echo $p['nombre'];?></td>
							<td><?php echo $p['descripcion'];?></td>
							<td><?php echo $p['stock'];?></td>
							<td><?php echo $p['precio'];?></td>
							<td>
								<input class="form-control" style="width: 80px;"  data-precio="<?php echo $p['precio'];?>" type="number" id="input_<?php echo $p['id'];?>"> 
							</td>
							<td>
								<button class="btn btn-dark" onclick="agragarCarrito(<?php echo $p['id'];?>)">
									Agregar
								</button>
								<button class="btn btn-danger" onclick="deleteProduct(<?php echo $p['id'];?>)">
									Eliminar
								</button>
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
	function agragarCarrito(id){
		
		precio=$('#input_'+id).attr('data-precio');
		cantidad=$('#input_'+id).val();
		console.log(precio+' '+cantidad);
		$.ajax({
			url:'?controller=Carrito&method=addProduct',
			data:{
				'precio':precio,
				'cantidad':cantidad,
				'id':id

			},
			type:'POST',
			success:function(response){
				console.log(response);
			}
		});

	}
	function deleteProduct(id){
		$.ajax({
			url:'?controller=Carrito&method=delete',
			data:{'id':id},
			type:'POST',
			success:function(response){
				console.log(response);
			}
		});
	}
	function destroyCar(){
		$.ajax({
			url:'?controller=Carrito&method=destroy',
			type:'POST',
			success:function(response){
				console.log(response);
			}
		});
	}
</script>
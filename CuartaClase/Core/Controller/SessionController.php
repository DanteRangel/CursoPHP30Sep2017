
<?php 
	session_start();
	Class SessionController{
		public $carrito=array();
		public $total=0;
		public $cantidad_productos=0;
		public function __construct($request){
			if(!isset($_SESSION['carrito'])){
				$_SESSION['carrito']=null;
			}else{
				$this->carrito=$_SESSION['carrito'];

			}
		}
		public function add($producto=array()){
			$producto['total']=$producto['cantidad']*$producto['precio'];
			$this->carrito[$producto['id']]=$producto;
			$this->actualizarTotales();
		}
		public function actualizarTotales(){
			$total=0;
			$cantidad_productos=0;
			if(!empty($this->carrito)){
				foreach ($this->carrito as $key => $producto) {
					$cantidad_productos+=$producto['cantidad'];
					$total+=($producto['cantidad']*$producto['precio']);
				}
			}
			$this->cantidad_productos=$cantidad_productos;
			$this->total=$total;
			$_SESSION['carrito']=$this->carrito;
		}
		public function destroy(){
			unset($_SESSION['carrito']);
			$this->carrito=null;
			$this->total=null;
			$this->cantidad_productos=null;
		}
		public function delete($id){
			unset($this->carrito[$id]);
			$this->actualizarTotales();
		}

	}
	return new SessionController($_REQUEST);
?>
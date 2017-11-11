
<?php 
	include APP_Model.'/Product.php';
	Class CarritoController{
		public $producto;
		public $carrito;
		public function __construct($request){
			$this->producto=new Product();
			$this->carrito=require(APP_Controller.'/SessionController.php');
			$this->request=$request;
		}

		public function index($request=0){
			include 'View/layouts/header.php';
			$product=new Product();
			$products=$product->all();
			include 'View/Carrito/index.php';
			include 'View/layouts/footer.php';

		}
		public function addProduct($request){
			if(isset($request['id']) && isset($request['cantidad'])){
				$producto=$this->producto->find($request['id']);
				$producto['cantidad']=$request['cantidad'];
				$this->carrito->add($producto);
			}
		}
		public function delete($request){
			if(isset($request['id'])){
				$this->carrito->delete($request['id']);
			}
		}
		public function destroy(){
			$this->carrito->destroy();
		}
	
	}
	return new CarritoController($_REQUEST);
?>
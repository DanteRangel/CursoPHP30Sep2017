<?php 
	include APP_Model.'/User.php';
	Class UserController{
		public $request;	
		public function __construct($request){
			$this->request=$request;
		}

		public function index($request=0){
			include 'View/layouts/header.php';
			$user=new User();
			$users=$user->all();

			include 'View/User/index.php';
			include 'View/layouts/footer.php';

		}
		public function edit($request=0){
			include 'View/layouts/header.php';
			$user=new User();
			$usuario=$user->find($_REQUEST['id']);
			if($usuario==0){
				echo '<legend>El Usuario no existe</legend>';
			}else{
				include 'View/User/edit.php';
			}
			include 'View/layouts/footer.php';			
		}
		public function update($request=0){
			if(isset($_POST['id'])){
				$user=new User();
				$resultado=$user->update($_POST,$_POST['id']);
				if($resultado){
					$this->index($_REQUEST);
				}else{
					$this->edit($_REQUEST);
				}
			}
		}
		public function delete($request=0){
			$user=new User();
			$resultado=$user->delete($_POST['id']);
			#$resultado=true;	
			header('Content-type: application/json');
			if($resultado){
				echo json_encode(array('code'=>1,'message'=>'Se ha a eliminado correctamente'));
			}else{
				echo json_encode(array('code'=>0,'message'=>'Error en el servidor'));
			}
		}
		public function create(){
			include 'View/layouts/header.php';
			include 'View/User/create.php';
			include 'View/layouts/footer.php';			
		}
		public function save(){

			$user=new User();
			$atributos=$_POST;
			$resultado=$user->save($_POST);
			if($resultado){
				$this->index();
			}else{
				$this->index();
			}

		}
		public function destroy($request=0){
			$user=new User();
			$resultado=$user->destroy($_POST['ids']);
			#$resultado=true;	
			header('Content-type: application/json');
			if($resultado){
				echo json_encode(array('code'=>1,'message'=>'Se ha a eliminado correctamente','resultado'=>$resultado));
			}else{
				echo json_encode(array('code'=>0,'message'=>'Error en el servidor','resultado'=>$resultado));
			}
		}

	}
	return new UserController($_REQUEST);
?>
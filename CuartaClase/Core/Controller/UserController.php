<?php 
	require APP_Model.'/User.php';
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
			$userInst=new User();
			$user=[];
			if(isset($_REQUEST['id'])){
				$user=$userInst->find($_REQUEST['id']);
				if(count($user)>0)	
					include 'View/User/edit.php';
				else
					echo '<h1>Usuario no encontrado</h1>';	
			}else{
				echo '<h1>No obtuvimos ningun resultado</h1>';
			}
			
			include 'View/layouts/footer.php';			
		}
		public function update($request=0){
			$user=new User();
			if(isset($_POST['id'])){
				$resultado=$user->update($_POST,$_POST['id']);
				
				if($resultado){
					$this->index($_REQUEST);
				}
				else
					echo '<h1>Usuario no encontrado</h1>';	
			}else{
				echo '<h1>No obtuvimos ningun resultado</h1>';
			}
		}


	}
	return new UserController($_REQUEST);
?>
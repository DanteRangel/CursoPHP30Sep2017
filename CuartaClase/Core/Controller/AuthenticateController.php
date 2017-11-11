<?php 
	include APP_Model.'/User.php';
	Class AuthenticateController{
		public $request;	
		public function __construct($request){
			$this->request=$request;
			switch($request['method']){
				case 'index';
					$this->index($request);
					break;
				case 'login';
					$this->login($request);
					break;
				case 'logout':
					$this->logout();
					break;
				default :
					$this->index();
					break;
			}
		}

		public function index($request=0){
			include 'View/layouts/header.php';

			include 'View/Authenticate/login.php';
			include 'View/layouts/footer.php';

		}
		public function login($request=0){
			var_dump($request);
			if(isset($request['correo']) && isset($request['password'])){
				$this->index();
			}else{
			$password=$request['password'];
			$user=$request['correo'];
				
			}
			#echo $password.'<br>';
			#echo $user;
		}
	}
	return new AuthenticateController($_REQUEST);
?>
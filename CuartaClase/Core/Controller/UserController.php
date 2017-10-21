<?php 
	Class UserController{
		public $request;	
		public function __construct($request){
			$this->request=$request;
		}

		public function index($request=0){
			include 'View/layouts/header.php';
			include 'View/User/index.php';
			include 'View/layouts/footer.php';

		}


	}
	return new UserController($_REQUEST);
?>
<?php 
	Class HomeController{
		public $request;
		public function __construct($request){
			$this->request=$request;
		}
		public function index($request=0){
			echo  'hola Mundo';
		}
	}


	return new HomeController($_REQUEST);
?>
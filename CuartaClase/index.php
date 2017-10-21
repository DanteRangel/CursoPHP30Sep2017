<?php 
	include './config/config.php';
	if(isset($_REQUEST['controller']) && file_exists(APP_Controller.$_REQUEST['controller'].'Controller.php') && isset($_REQUEST['method'])){
		$metodo=$_REQUEST['method'];
		$controller=include APP_Controller.$_REQUEST['controller'].'Controller.php';
		if(method_exists($controller, $metodo)){
			$controller->$metodo($_REQUEST);
		}else{
			$controller->index($_REQUEST);
		}
	}else{
		$controller=include(APP_Controller.'HomeController.php');
		$controller->index();
	}
?>
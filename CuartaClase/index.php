<?php 
	include './config/config.php';
	session_start();
	if(isset($_REQUEST['controller']) && file_exists(APP_Controller.$_REQUEST['controller'].'Controller.php') && isset($_REQUEST['method'])){
		$metodo=$_REQUEST['method'];
		if(isset($_SESSION) && isset($_SESSION['user'])){
			$controller=include APP_Controller.$_REQUEST['controller'].'Controller.php';
			if(method_exists($controller, $metodo)){
				$controller->$metodo($_REQUEST);
			}else{
				$controller->index($_REQUEST);
			}
		}else{

			$controller=include APP_Controller.'AuthenticateController.php';
			$controller->$metodo($_REQUEST);

		}
	}else{
		$controller=include(APP_Controller.'HomeController.php');
		$controller->index();
	}
?>
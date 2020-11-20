<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
	
	require_once('Routes.php');

	require_once 'vendor/autoload.php';
	$loader = new \Twig\Loader\FilesystemLoader('Views');
	$twig = new \Twig\Environment($loader, [
	    'cache' => 'cache',
	]);

	echo $twig->render('index.html.twig', ['name' => 'Fabien']);

	function __autoload($class_name) {

		if(file_exists('./classes/'.$class_name.'.php')){
			require_once './classes/'.$class_name.'.php';
		}else if(file_exists('./Models/'.$class_name.'.php')){
			require_once './Models/'.$class_name.'.php';
		}else if(file_exists('./Controllers/'.$class_name.'.php')){
			require_once './Controllers/'.$class_name.'.php';
		}
	}
ob_end_flush();

?>


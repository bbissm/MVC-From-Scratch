<?php
error_reporting(E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR);
session_start();

	require_once('Routes.php');

	function __autoload($class_name) {
		if(file_exists('./classes/'.$class_name.'.php')){
			require_once './classes/'.$class_name.'.php';
		}else if(file_exists('./Controllers/'.$class_name.'.php')){
			require_once './Controllers/'.$class_name.'.php';
		}
	}
?>


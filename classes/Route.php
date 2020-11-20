<?php
	class Route {

		public static $validRoutes = array();

		public static function set($route, $function)
		{
		    self::$validRoutes[] = $route;
		    $url = '';
		    if(isset($_GET["url"])){
		    	$url = $_GET["url"];
		    }else{
		    	$url = "home";
		    }
		    if($url == $route) {
		        $function->__invoke();
		    }
		}
	}
?>
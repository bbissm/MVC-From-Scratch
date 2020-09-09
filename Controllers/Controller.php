<?php
	class Controller extends Database {

		public static function CreateView($viewName) {
			require_once("./Views/".$viewName.".php");
			if($viewName == "Index") {
				static::deleteUser();
				if(isset($_SESSION["loggedIn"])){
					static::doSomething();
					// static::generatePDF();
				}
				if(isset($_POST["register"])) {
					static::createUser();
				}
				if(isset($_POST["login"])) {
					static::checkUserLogin();
				}
				if(isset($_GET["logout"])) {
					static::logout();
				}
				if(isset($_GET["pdf"])) {
					PDF::generatePDF();
				}
			}
			
		}
	}
?>
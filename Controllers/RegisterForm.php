<?php
	class RegisterForm extends Controller {
		public static function listUsers() {
			$result = self::query("Select * FROM mvc_project.users");
			return $result;			
		}
		public static function createUser()
		{
			$insert = self::query("INSERT INTO mvc_project.users (name,password) VALUES ('".$_POST["username"]."','".md5($_POST["password"])."')");
			// header('Location: '.$_SERVER['REQUEST_URI']);
			
		}

		public static function logout()
		{
			session_destroy();
			header('Location: /');
		}
	}
?>

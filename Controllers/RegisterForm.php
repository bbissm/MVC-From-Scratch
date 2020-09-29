<?php
	class RegisterForm extends Controller {
		public static function listUsers() {
			$result = self::query("Select * FROM mvc_project.users");
			return $result;			
		}
		public static function createUser()
		{
			$insert = self::query("INSERT INTO mvc_project.users (prename,lastname,name,email,password) VALUES ('".$_POST["prename"]."','".$_POST["lastname"]."','".$_POST["username"]."','".$_POST["email"]."','".md5($_POST["password"])."')");
			header('Location: '.$_SERVER['REQUEST_URI']);
		}

		public static function logout()
		{
			session_destroy();
			header('Location: /');
		}
	}
?>

<?php
	class LoginForm extends Controller {
		public static function checkUserLogin()
		{
			$result = self::query("Select * FROM mvc_project.users");
			$_POST["pwd"] = md5($_POST["pwd"]);
			foreach ($result as $key => $value) {
				
				if($_POST["uname"] == $value["name"] && $_POST["pwd"] !== $value["password"]){
					echo "falsches Passwort";
				}elseif($_POST["uname"] == $value["name"] && $_POST["pwd"] == $value["password"]){
					$_SESSION["loggedIn"] = $value["id_user"];;
					$_SESSION["loggedInUser"] = $value["name"];
					header('Location: /');
				}
			}
		}
	}
?>

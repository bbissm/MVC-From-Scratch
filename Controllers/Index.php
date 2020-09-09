<?php
	class Index extends Controller {
		public static function doSomething() {
			$result = self::query("Select * FROM mvc_project.users");
			return $result;			
		}
		public static function createUser()
		{
			if(isset($_POST["register"])){
				header('Location: '.$_SERVER['REQUEST_URI']);
				$insert = self::query("INSERT INTO mvc_project.users (name,password) VALUES ('".$_POST["username"]."','".$_POST["password"]."')");
			} 
		}
		public static function deleteUser()
		{
			if(isset($_GET["delete"])){
				header('Location: /index.php');
				$delete = self::query("DELETE FROM mvc_project.users WHERE id_user=".$_GET["delete"]);
			}
			
		}

		public static function checkUserLogin()
		{
			
			$result = self::query("Select * FROM mvc_project.users");
			foreach ($result as $key => $value) {

				if($_POST["uname"] == $value["name"] && $_POST["pwd"] !== $value["password"]){
					echo "falsches Passwort";
				}elseif($_POST["uname"] == $value["name"] && $_POST["pwd"] == $value["password"]){
					$_SESSION["loggedIn"] = 1;
					$_SESSION["loggedInUser"] = $value["name"];
					header('Location: /index.php');

				}
			}
		}

		public static function logout()
		{
			session_destroy();
			header('Location: /index.php');
		}
	}
?>

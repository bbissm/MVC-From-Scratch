<?php
	class Index extends Controller {
		public static function listUsers() {
			$result = self::query("Select * FROM mvc_project.users");
			return $result;			
		}
		public static function deleteUser()
		{
			$delete = self::query("DELETE FROM mvc_project.users WHERE id_user=".$_GET["delete"]);
			header('Location: /');
		}

		public static function logout()
		{
			session_destroy();
			header('Location: /');
		}
	}
?>

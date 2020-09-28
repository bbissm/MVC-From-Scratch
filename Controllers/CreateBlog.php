<?php
	class CreateBlog extends Controller {
		public static function create()
		{
			print_r($_SESSION);
			$insert = self::query("INSERT INTO mvc_project.blog (title,text,user_fk) VALUES ('".$_POST["title"]."','".$_POST["text"]."','".$_SESSION["loggedIn"]."')");
			header('Location: '.$_SERVER['REQUEST_URI']);
			
		}

		public static function listBlogs() {
			$result = self::query("Select * FROM mvc_project.blog as b JOIN mvc_project.users as u on u.id_user=b.user_fk");
			return $result;			
		}

		public static function logout()
		{
			session_destroy();
			header('Location: /');
		}
	}
?>

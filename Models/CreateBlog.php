<?php
	class CreateBlog extends Controller {

		public static function create()
		{
			$text = str_replace("'", "", $_POST["text"]);
			$query = "INSERT INTO mvc_project.blog (title,text,user_fk) VALUES ('".$_POST["title"]."','".$text."','".$_SESSION["loggedIn"]."')";
			self::query($query);
			header('Location: '.$_SERVER['REQUEST_URI']);
			
		}

		public static function listBlogs($userId="") {
			$whereUser = "";
			if($userId != ""){
				$whereUser = "WHERE u.id_user=".$userId;
			}
			$query = "Select * FROM mvc_project.blog as b JOIN mvc_project.users as u on u.id_user=b.user_fk ".$whereUser;
			$result = self::query($query);
			return $result;			
		}

		public static function deleteBlog()
		{
			$delete = self::query("DELETE FROM mvc_project.blog WHERE id_blog=".$_GET["deleteBlog"]);
			header('Location: /createBlog');

		}

		public static function logout()
		{
			session_destroy();
			header('Location: /');
		}
	}
?>

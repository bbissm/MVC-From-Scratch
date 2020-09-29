<?php
	class Controller extends Database {

		public static function CreateView($viewName) {
			require_once("./Views/".$viewName.".php");
			if($viewName == "Index") {

				if(isset($_SESSION["loggedIn"])){
					static::listUsers();
				}
				if(isset($_GET["logout"])) {
					static::logout();
				}
				if(isset($_GET["delete"])){
					static::deleteUser();
				}
			}
			if($viewName == "RegisterForm") {
				if(isset($_POST["register"])) {
					static::createUser();
				}
				if(isset($_GET["logout"])) {
					static::logout();
				}
			}
			if($viewName == "LoginForm") {
				if(isset($_POST["login"])) {
					static::checkUserLogin();
				}
			}
			if($viewName == "CreateBlog") {
				if(isset($_POST["createBlog"])) {
					static::create();
				}
				if(isset($_GET["deleteBlog"])) {
					static::deleteBlog();
				}
				if(isset($_GET["logout"])) {
					static::logout();
				}
			}

			if($viewName == "EditProfile") {

				$showProfile = static::showProfile();
				if(isset($_POST["editProfile"])) {
					static::edit();
				}
				if(isset($_GET["logout"])) {
					static::logout();
				}
			}
		}
	}
?>
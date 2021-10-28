<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$index = new Index();
$test = $index->doSomething();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<META http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scratch</title>
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
	<!-- <script src="http://malsup.github.com/jquery.form.js"></script>  -->
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


	<script type="text/javascript">
		function vueJS() {
			var vue = new Vue({
				el: '#test',
				data: {
					firstname: '',
					lastname: ''

				},

				// methods: {
				// 	write: function() {
				// 		return this.firstname+" "+this.lastname;
				// 	}
				// }
			})
		}
		$(document).ready(function(){
			vueJS();
		});
	</script>
</head>
<body>
<header class="header-image">
	<section class="hero is-medium">
				<!-- Hero head: will stick at the top -->
				<div class="hero-head">
					<nav class="navbar is-fixed-top is-info is-bold">
						<div class="container">
							<div class="navbar-brand">
								<a class="navbar-item">
									<img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
								</a>
								<span class="navbar-burger burger" data-target="navbarMenuHeroA">
									<span></span>
									<span></span>
									<span></span>
								</span>
							</div>
							<div id="navbarMenuHeroA" class="navbar-menu">
								<div class="navbar-end">
									<a class="navbar-item is-active">
										Home
									</a>
									<a class="navbar-item">
										Examples
									</a>
									<a class="navbar-item">
										Documentation
									</a>
									<span class="navbar-item">
										<a class="button is-primary is-inverted">
											<span class="icon">
												<i class="fab fa-github"></i>
											</span>
											<span>Download</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</nav>
				</div>
				<!-- Hero content: will be in the middle -->
				<div class="hero-body">
					<div class="container has-text-centered">
						<h1 class="title">
						Title
						</h1>
						<h2 class="subtitle">
						Subtitle
						</h2>
					</div>
				</div>
				<!-- Hero footer: will stick at the bottom -->
				<!-- not working. Warning: Cannot modify header information - headers already sent by (output started at /Applications/MAMP/htdocs/mvc_php/Views/Index.php:163) -->
				<div class="hero-foot">
					<nav class="tabs">
						<div class="container">
							<ul>
							</ul>
						</div>
					</nav>
				</div>
			</section>

</header>
<?php if(isset($_SESSION["loggedIn"])) { ?>
	<h1>Herzlich Willkommen <?php echo " ".$_SESSION["loggedInUser"]?></h1>
	<a href="?logout=1">Logout</a>
	<h1>Vue JS</h1>
	<div id="test">
		<input type="text" v-model="firstname" placeholder="firstname">
		<input type="text" v-model="lastname" placeholder="lastname">
		<h1>{{ firstname }} {{ lastname }}</h1>
	</div>
	
<?php }else{ ?>
	<h1>Register</h1>
	<div class="registerform">
		<form method="POST" id="createUserForm">
			<input type="text" name="username" required>
			<input type="password" name="password" required>
			<input type="submit" name="register">
		</form>
	</div>
<div class="wrapper fadeInDown">
	  <div id="formContent">
	    <!-- Tabs Titles -->

	    <!-- Icon -->
	    <div class="fadeIn first">
			<img src="https://img.icons8.com/nolan/96/login-rounded-right.png"/>
	    </div>

	    <!-- Login Form -->
	    <form method="POST">
	      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="login">
	      <input type="password" id="password" class="fadeIn third" name="pwd" placeholder="password">
	      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
	    </form>

	    <!-- Remind Passowrd -->
	    <div id="formFooter">
	      <a class="underlineHover" href="#">Forgot Password?</a>
	    </div>

	  </div>
	</div>
<?php } ?>
<h2>Alle Benutzer</h2>
	<?php
		foreach ($test as $value) {
		    print_r("<pre>".$value["name"]."<a href='?delete=".$value["id_user"]."'> delete</a><a href='?pdf=".$value["id_user"]."'> generate PDF</a></pre>");
		}
	?>



<script type="text/javascript" src="js/app.js"></script>

</body>
</html>
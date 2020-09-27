<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$index = new Index();
$test = $index->doSomething();

	



	// print_r($_SESSION);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<style type="text/css">
		/* BASICS */
		html {
		  background-color: #56baed;
		}

		body {
		  font-family: "Poppins", sans-serif;
		  height: 100vh;
		}

		a {
		  color: #92badd;
		  display: inline-block;
		  text-decoration: none;
		  font-weight: 400;
		}

		h2 {
		  text-align: center;
		  font-size: 16px;
		  font-weight: 600;
		  text-transform: uppercase;
		  display: inline-block;
		  margin: 40px 8px 10px 8px;
		  color: #cccccc;
		}

		/* STRUCTURE */
		.wrapper {
		  display: flex;
		  align-items: center;
		  flex-direction: column;
		  justify-content: center;
		  width: 100%;
		  min-height: 100%;
		  padding: 20px;
		}

		#formContent {
		  -webkit-border-radius: 10px 10px 10px 10px;
		  border-radius: 10px 10px 10px 10px;
		  background: #fff;
		  padding: 30px;
		  width: 90%;
		  max-width: 450px;
		  position: relative;
		  padding: 0px;
		  -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
		  box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
		  text-align: center;
		}

		#formFooter {
		  background-color: #f6f6f6;
		  border-top: 1px solid #dce8f1;
		  padding: 25px;
		  text-align: center;
		  -webkit-border-radius: 0 0 10px 10px;
		  border-radius: 0 0 10px 10px;
		}

		/* TABS */
		h2.inactive {
		  color: #cccccc;
		}

		h2.active {
		  color: #0d0d0d;
		  border-bottom: 2px solid #5fbae9;
		}

		/* FORM TYPOGRAPHY*/
		input[type=button], input[type=submit], input[type=reset] {
		  background-color: #56baed;
		  border: none;
		  color: white;
		  padding: 15px 80px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  text-transform: uppercase;
		  font-size: 13px;
		  -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
		  box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
		  -webkit-border-radius: 5px 5px 5px 5px;
		  border-radius: 5px 5px 5px 5px;
		  margin: 5px 20px 40px 20px;
		  -webkit-transition: all 0.3s ease-in-out;
		  -moz-transition: all 0.3s ease-in-out;
		  -ms-transition: all 0.3s ease-in-out;
		  -o-transition: all 0.3s ease-in-out;
		  transition: all 0.3s ease-in-out;
		}

		input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {
		  background-color: #39ace7;
		}

		input[type=button]:active, input[type=submit]:active, input[type=reset]:active {
		  -moz-transform: scale(0.95);
		  -webkit-transform: scale(0.95);
		  -o-transform: scale(0.95);
		  -ms-transform: scale(0.95);
		  transform: scale(0.95);
		}

		input[type=text],input[type=password] {
		  background-color: #f6f6f6;
		  border: none;
		  color: #0d0d0d;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 5px;
		  width: 85%;
		  border: 2px solid #f6f6f6;
		  -webkit-transition: all 0.5s ease-in-out;
		  -moz-transition: all 0.5s ease-in-out;
		  -ms-transition: all 0.5s ease-in-out;
		  -o-transition: all 0.5s ease-in-out;
		  transition: all 0.5s ease-in-out;
		  -webkit-border-radius: 5px 5px 5px 5px;
		  border-radius: 5px 5px 5px 5px;
		}

		input[type=text]:focus {
		  background-color: #fff;
		  border-bottom: 2px solid #5fbae9;
		}

		input[type=text]:placeholder {
		  color: #cccccc;
		}

		/* ANIMATIONS */
		/* Simple CSS3 Fade-in-down Animation */
		.fadeInDown {
		  -webkit-animation-name: fadeInDown;
		  animation-name: fadeInDown;
		  -webkit-animation-duration: 1s;
		  animation-duration: 1s;
		  -webkit-animation-fill-mode: both;
		  animation-fill-mode: both;
		}

		@-webkit-keyframes fadeInDown {
		  0% {
		    opacity: 0;
		    -webkit-transform: translate3d(0, -100%, 0);
		    transform: translate3d(0, -100%, 0);
		  }
		  100% {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}
		@keyframes fadeInDown {
		  0% {
		    opacity: 0;
		    -webkit-transform: translate3d(0, -100%, 0);
		    transform: translate3d(0, -100%, 0);
		  }
		  100% {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}
		/* Simple CSS3 Fade-in Animation */
		@-webkit-keyframes fadeIn {
		  from {
		    opacity: 0;
		  }
		  to {
		    opacity: 1;
		  }
		}
		@-moz-keyframes fadeIn {
		  from {
		    opacity: 0;
		  }
		  to {
		    opacity: 1;
		  }
		}
		@keyframes fadeIn {
		  from {
		    opacity: 0;
		  }
		  to {
		    opacity: 1;
		  }
		}
		.fadeIn {
		  opacity: 0;
		  -webkit-animation: fadeIn ease-in 1;
		  -moz-animation: fadeIn ease-in 1;
		  animation: fadeIn ease-in 1;
		  -webkit-animation-fill-mode: forwards;
		  -moz-animation-fill-mode: forwards;
		  animation-fill-mode: forwards;
		  -webkit-animation-duration: 1s;
		  -moz-animation-duration: 1s;
		  animation-duration: 1s;
		}

		.fadeIn.first {
		  -webkit-animation-delay: 0.4s;
		  -moz-animation-delay: 0.4s;
		  animation-delay: 0.4s;
		}

		.fadeIn.second {
		  -webkit-animation-delay: 0.6s;
		  -moz-animation-delay: 0.6s;
		  animation-delay: 0.6s;
		}

		.fadeIn.third {
		  -webkit-animation-delay: 0.8s;
		  -moz-animation-delay: 0.8s;
		  animation-delay: 0.8s;
		}

		.fadeIn.fourth {
		  -webkit-animation-delay: 1s;
		  -moz-animation-delay: 1s;
		  animation-delay: 1s;
		}

		/* Simple CSS3 Fade-in Animation */
		.underlineHover:after {
		  display: block;
		  left: 0;
		  bottom: -10px;
		  width: 0;
		  height: 2px;
		  background-color: #56baed;
		  content: "";
		  transition: width 0.2s;
		}

		.underlineHover:hover {
		  color: #0d0d0d;
		}

		.underlineHover:hover:after {
		  width: 100%;
		}

		/* OTHERS */
		*:focus {
		  outline: none;
		}

		#icon {
		  width: 60%;
		}

		/*# sourceMappingURL=main.css.map */

	</style>
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
		
		// function createUser() {
		// 	$("#createUserForm").submit(function(e) {
		// 	    e.preventDefault(); // avoid to execute the actual submit of the form.

		// 	    var form = $(this);
		// 	    console.log(form);
		// 	    var url = form.attr('action');
		// 	    var uname = $('#username').val();

			    
		// 	    $.ajax({
		// 	           type: "POST",
		// 	           url: "/Controllers/AjaxHandler.php",
		// 	           data: {username: uname
		// 	         	},
		// 	           	success: function(data)
		// 	           {
		// 	           		console.log(data);
		// 	               	alert(data); // show response from the php script.
		// 	           }
		// 	    });
			    
		// 	});

		// }
		$(document).ready(function(){
			vueJS();
			// createUser();
		});
	</script>
	<!-- <script type="text/javascript" src="../js/user.js"></script> -->
</head>
<body>
<?php if(isset($_SESSION["loggedIn"])) { ?>
	<h1>Herzlich Willkommen <?php echo " ".$_SESSION["loggedInUser"]?></h1>
	<a href="?logout=1">Logout</a>
	<h1>Vue JS</h1>
	<!-- <div id="test">
		<input type="text" v-model="firstname" placeholder="firstname">
		<input type="text" v-model="lastname" placeholder="lastname">
		<h1>{{ firstname }} {{ lastname }}</h1>
	</div> -->
	
<?php }else{ ?>
	<!-- <h1>Register</h1>
	<div class="registerform">
		<form method="POST" id="createUserForm">
			<input type="text" name="username" required>
			<input type="password" name="password" required>
			<input type="submit" name="register">
		</form>
	</div> -->
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
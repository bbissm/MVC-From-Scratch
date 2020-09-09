<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "session -> ";
print_r($_SESSION);
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
	<style type="text/css">
		
		/* BASIC */

		html {
		  background-color: #56baed;
		}

		body {
		  font-family: "Poppins", sans-serif;
		  height: 100vh;
		}

		a {
		  color: #92badd;
		  display:inline-block;
		  text-decoration: none;
		  font-weight: 400;
		}

		h2 {
		  text-align: center;
		  font-size: 16px;
		  font-weight: 600;
		  text-transform: uppercase;
		  display:inline-block;
		  margin: 40px 8px 10px 8px; 
		  color: #cccccc;
		}

	</style>
	<!-- <script type="text/javascript" src="../js/user.js"></script> -->
</head>
<body>
<?php if(isset($_SESSION["loggedIn"])) { ?>
	<h1>Herzlich Willkommen <?php echo " ".$_SESSION["loggedInUser"]?></h1>
	<a href="?logout=1">Logout</a>
	<h1>Vue JS</h1>
	<div id="test">
		<input type="text" v-model="firstname" placeholder="firstname">
		<input type="text" v-model="lastname" placeholder="lastname">
		<h1>{{ firstname }} {{ lastname }}</h1>
		<!-- <p>{{write()}}</p> -->
	</div>
<?php }else{ ?>
	<!-- <h1>Register</h1>
	<form method="POST" id="createUserForm">
		<input type="text" name="username" required>
		<input type="password" name="password" required>
		<input type="submit" name="register">
	</form> -->
	<h1>Login</h1>
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
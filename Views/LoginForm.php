<?php
require "Views/templates/header.php";
?>
<section class="">
	<h1 class="title">Login</h1>
	<form method="POST">
		<div class="field">
		  <p class="control has-icons-left has-icons-right">
		    <input class="input" type="text" placeholder="Username" id="login" name="uname">
		    <span class="icon is-small is-left">
		      <i class="fas fa-envelope"></i>
		    </span>
		    <span class="icon is-small is-right">
		      <i class="fas fa-check"></i>
		    </span>
		  </p>
		</div>
		<div class="field">
		  <p class="control has-icons-left">
		    <input class="input" id="password" type="password" placeholder="Password" name="pwd">
		    <span class="icon is-small is-left">
		      <i class="fas fa-lock"></i>
		    </span>
		  </p>
		</div>
		<div class="field">
		  <p class="control">
		    <input type="submit" class="button is-success" value="Login" name="login">
		  </p>
		</div>
	</form>
</section>
<?php
require "Views/templates/footer.html";
?>
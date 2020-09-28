<?php
  require 'Views/templates/header.php';
?>
<section>
  <h1 class="title">Registration</h1>
<form method="POST" id="createUserForm">
<!-- <div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input">
  </div>
</div> -->

<div class="field">
  <label class="label">Username</label>
  <div class="control has-icons-left has-icons-right">
<!--     <input class="input is-success" type="text" name="username" placeholder="Text input"> -->    
    <input class="input" type="text" name="username" placeholder="Text input">

    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </div>
  <!-- <p class="help is-success">This username is available</p> -->
</div>

<!-- <div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email" placeholder="Email input">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <p class="help is-danger">This email is invalid</p>
</div> -->

<div class="field">
  <label class="label">Password</label>
  <p class="control has-icons-left">
    <input class="input" type="password" name="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>


<div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox" required>
      I agree to the <a href="#">terms and conditions</a>
    </label>
  </div>
</div>

<!-- <div class="field">
  <div class="control">
    <label class="radio">
      <input type="radio" name="question">
      Yes
    </label>
    <label class="radio">
      <input type="radio" name="question">
      No
    </label>
  </div>
</div> -->

<div class="field is-grouped">
  <div class="control">
    <input class="button is-link" type="submit" name="register" value="Registrieren">
  </div>
</div>
</form>
</section>


<?php
  require 'Views/templates/footer.html';
?>
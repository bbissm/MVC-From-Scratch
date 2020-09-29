<?php
  require 'Views/templates/header.php';
  $result = EditProfile::showProfile();
  // print_r($result);
?>
<section>
<h1 class="title">Benutzerdaten</h1>
<form method="POST" enctype="multipart/form-data">
  <div class="columns">
    <div class="column">
      <img src="<?php if($result[0]["image"] != '') { echo $result[0]['image'];}else{echo 'assets/profile.png';}?>">
      <div class="field">
        <div id="file-js-example" class="file has-name is-fullwidth">
          <label class="file-label">
          <input class="file-input" type="file" name="image">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            <?php  echo "profile.png";?>
          </span>
        </label>
        </div>
      </div>
    </div>
        <div class="column">
          <div class="field">
      <label class="label">Vorname</label>
      <div class="control">
        <input class="input" type="text" placeholder="Text input" name="prename" value="<?php echo $result[0]['prename']; ?>">
      </div>
    </div>
    <div class="field">
      <label class="label">Nachname</label>
      <div class="control">
        <input class="input" type="text" placeholder="Text input" name="lastname" value="<?php echo $result[0]['lastname']; ?>">
      </div>
    </div>

    <div class="field">
      <label class="label">Username</label>
      <div class="control has-icons-right">
    <!--     <input class="input is-success" type="text" name="username" placeholder="Text input"> -->    
        <input class="input" type="text" name="username" placeholder="Text input" value="<?php echo $result[0]['name']; ?>">

        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fas fa-check"></i>
        </span>
      </div>
      <!-- <p class="help is-success">This username is available</p> -->
    </div>

    <div class="field">
      <label class="label">Email</label>
      <div class="control has-icons-right">
        <input class="input" type="email" placeholder="Email input" name="email" value="<?php echo $result[0]['email']; ?>">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fas fa-exclamation-triangle"></i>
        </span>
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
    <input class="button is-link" type="submit" name="editProfile" value="Speichern">
  </div>
</div>
    </div>
  </div>

</div>

</form>
</section>

<script type="text/javascript">
  $(document).ready(function(){
    const fileInput = document.querySelector('#file-js-example input[type=file]');
    fileInput.onchange = () => {
      if (fileInput.files.length > 0) {
        const fileName = document.querySelector('#file-js-example .file-name');
        fileName.textContent = fileInput.files[0].name;
      }
    }
  });
</script>
<?php
  require 'Views/templates/footer.html';
?>
<?php
require "Views/templates/header.php";
$blog = CreateBlog::listBlogs($_SESSION["loggedIn"]);
?>
<section class="accordions">
  <article class="accordion is-active">
    <div class="accordion-header toggle">
      <h1 class="title">Erstelle einen Blog</h1>
    </div>
    <div class="accordion-body">
      <div class="accordion-content">
        <form method="POST">
		<div class="field">
		  <label class="label">Blog Titel</label>
		  <div class="control">
		    <input class="input" type="text" placeholder="Title" name="title">
		  </div>
		</div>
		<div class="field">
		  <label class="label">Blog Text</label>
		  <div class="control">
		    <textarea class="textarea" type="text" placeholder="Title" name="text"></textarea>
		  </div>
		</div>
		<div class="field is-grouped">
		  <div class="control">
		    <input class="button is-link" value="Senden" type="submit" name="createBlog">
		  </div>
		</div>
	</form>
      </div>
    </div>
  </article>
</section>

<section>
	<h1 class="title">Meine Blogs</h1>
	<?php
	foreach ($blog as $key => $value) {
		echo "<hr>";
		echo "<div class='columns'>";
			echo "<div class='column is-2'>";
				if($value["image"] !="") {
					echo "<img src='".$value["image"]."'>";
				}else{?>
					<img src="assets/profile.png">

				<?php }
				echo "<p>".$value["prename"]." ". $value["lastname"]."</p>";
			echo "</div>";
			echo "<div class='column'>";
				echo "<h1 class='subtitle'>".$value["title"]."</h1>";
				echo "<p class='text'>".$value["text"]."</p>";
				echo "<a class='button is-success mr-3 mt-3' href='?editBlog=".$value["id_blog"]."'>Editieren</a>";
				echo "<a class='button is-danger mr-3 mt-3' href='?deleteBlog=".$value["id_blog"]."'>Löschen</a>";
			echo "</div>";
		echo "</div>";
	}
	?>
</section>


<?php
require "Views/templates/footer.html";

?>
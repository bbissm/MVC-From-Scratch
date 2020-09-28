<?php
require "Views/templates/header.php";
$blog = CreateBlog::listBlogs();
?>

<section>
	<h1 class="title">Erstelle deinen Blog</h1>
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
	    <input class="input" type="text" placeholder="Title" name="text">
	  </div>
	</div>
	<div class="field is-grouped">
	  <div class="control">
	    <input class="button is-link" value="Senden" type="submit" name="createBlog">
	  </div>
	</div>
	</form>
</section>

<section>
	<h1 class="title">All Blogs</h1>
	<?php
	foreach ($blog as $key => $value) {
		echo "<hr>";
		echo "<div class='columns'>";
			echo "<div class='column is-2'>";
				echo "<img src='assets/article_img.jpg'>";
				echo "<p >".$value["name"]."</p>";
			echo "</div>";
			echo "<div class='column'>";
				echo "<h1 class='subtitle'>".$value["title"]."</h1>";
				echo "<p class='text'>".$value["text"]."</p>";
			echo "</div>";
		echo "</div>";




	}

	?>
	<div>
		<h1 class="subtitle"></h1>
	</div>

</section>


<?php
require "Views/templates/footer.html";

?>
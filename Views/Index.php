<?php 
	require "Views/templates/header.php";
	if(isset($_SESSION["loggedIn"])) { ?>
	<section class="column">
		<h1 class="title">Herzlich Willkommen <?php echo " ".$_SESSION["loggedInUser"]?></h1>
		<h1>Vue JS</h1>
		<div id="test">
			<input type="text" v-model="firstname" placeholder="firstname">
			<input type="text" v-model="lastname" placeholder="lastname">
			<h1>{{ firstname }} {{ lastname }}</h1>
		</div>
	</section>
	
<?php }else{ ?>

<?php }?>
	
		
	<?php
	if(isset($_SESSION["loggedIn"])) {
		echo "<section class='column'>";

		echo "<h2 class='title is-2'>Alle Benutzer</h2>";
		$test= Index::listUsers();

		foreach ($test as $value) {
		    echo "<pre>".$value["name"]."<a href='?delete=".$value["id_user"]."'> delete</a></pre>";
		}
		echo "</section>";
	}
	?>
	
			<section id="about" class=" is-vcentered columns column">
				<div class="column is-half">
					<figure class="image is-fullwidth">
						<img src="../assets/article_img.jpg">
					</figure>
				</div>
				<div class="is-half column">
					<div class="container">
						<h1 class="title is-size-2 has-text-centered">Post1</h1>
						<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop pubdivshing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
			</section>
			<section id="team" class="columns column is-vcentered">
				<div class="is-half column">
					<div class="container">
						<h1 class="title is-size-2 has-text-centered">Post2</h1>
						<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="column is-half">
					<figure class="image is-fullwidth">
						<img src="../assets/article_img2.jpg">
					</figure>
				</div>
				
			</section>
			
			<?php
				require "Views/templates/footer.html";
			?>
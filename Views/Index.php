<?php 
	require "Views/templates/header.php";
	if(isset($_SESSION["loggedIn"])) { ?>
	<section class="column">
		<h1 class="title">Herzlich Willkommen <?php echo " ".$_SESSION["loggedInUser"]?></h1>
		<h1>Vue JS</h1>
		<!--<div id="test">
			<input type="text" v-model="firstname" placeholder="firstname">
			<input type="text" v-model="lastname" placeholder="lastname">
			<h1>{{ firstname }} {{ lastname }}</h1>
		</div>-->
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
	<hr>
	<h1>Testing Form submit AJAX
		<form id="submitData" method="POST" enctype="multipart/form-data">
			<input type="hidden" id="restorationID" name="restorationID" value="">
			<input type="hidden" id="fk_inventaire" name="fk_inventaire" value="">
			<?php 
				print_r($_POST);
			
				for ($i=1; $i < 4; $i++) { 
					echo "<pre>";
					echo "<label>Button ".$i."</label><a style='margin-left:20px;' class='is-danger button deleteBtn'><input type='hidden' value='".$i."'>Löschen</a>";
					echo "</pre>";
				}
				echo "<a style='margin-top:20px;' class='is-success button' id='addBtn'><input type='hidden' value='74'>Hinzufügen</a>";

				
			?>
		</form>

		<script type="text/javascript">
			$(".deleteBtn").each(function() {
			    $(this).click(function(){
			        $("#restorationID").val($(this).children('input').val());
			        $("#submitData").submit();
			    })
			});

			$("#addBtn").click(function(){
				console.log($(this).children('input').val());
				$("#fk_inventaire").val($(this).children('input').val());
				$("#submitData").submit();
			});	

		</script>
	<hr>

    <!-- FILTER SELECT ------->
    <section>
        <label for="ratingSelect">Wähle ein Rating aus:</label>
        <select id="ratingSelect">
            <option value="0">Select Rating</option>
            <option value="1">Rating 1</option>
            <option value="2">Rating 2</option>
            <option value="3">Rating 3</option>
            <option value="4">Rating 4</option>
            <option value="5">Rating 5</option>
        </select>
    </section>
    <!-- ENDE FILTER SELECT --------->
    <!-- Range SLIDER -------->
    <div class="slidecontainer">
        <div class="columns">
            <div class="column is-half">
                <div class="columns">
                    <div class="column is-4">
                        <label for="myRange">Dein Geschmack:</label>
                        <input type="range" min="0" max="10" value="0" class="slider" id="myRange">
                    </div>
                    <div class="column is-1">
                        <p id="demo"></p><br>
                    </div>
                    <div class="column is-4">
                        <a id="resetRange" class="button">Reset</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RANGE SLIDER ENDE ------->
	
			<section id="post1" class="geschmackContainer is-vcentered columns column" data-geschmack="2" data-rating="5">
				<div class="column is-half">
					<figure class="image is-fullwidth">
						<img src="../assets/article_img.jpg" alt="test">
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
			<section id="post2" class="geschmackContainer columns column is-vcentered" data-geschmack="5" data-rating="2">
				<div class="is-half column">
					<div class="container">
						<h1 class="title is-size-2 has-text-centered">Post2</h1>
						<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="column is-half">
					<figure class="image is-fullwidth">
						<img src="../assets/article_img2.jpg" alt="test">
					</figure>
				</div>
				
			</section>
			
			<?php
				require "Views/templates/footer.html";
			?>
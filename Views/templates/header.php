<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="Content-Style-Type" content="text/css">-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Scratch</title>

		<!-- JAVASCRIPTS -->
		<script src="Views/js/jquery.min.js"></script>
		<script src="Views/js/vue.js" type="text/javascript"></script>
		<script src="node_modules/bulma-accordion/dist/js/bulma-accordion.min.js" type="text/javascript" ></script>
		<script defer src="node_modules/bulma-accordion/dist/js/bulma-accordion.min.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
        <script src="Views/js/main.js" type="text/javascript"></script>
		<!-- JAVASCRIPTS ENDE -->

		<!-- STYLESHEETS -->
		<link rel="stylesheet" type="text/css" href="node_modules/bulma-accordion/dist/css/bulma-accordion.min.css">

			<!-- MY STYLE -->
			<link rel="stylesheet" type="text/css" href="Views/css/mystyles.css">

		<!-- STYLESHEETS ENDE-->
	</head>
	<body>
		<header class="header-image">
			<section class="hero is-medium">
				<!-- Hero head: will stick at the top -->
				<div class="hero-head">
					<nav class="navbar is-fixed-top is-info is-bold">
						<div class="container">
							<div class="navbar-brand">
								<a class="navbar-item" href="/">
									<!-- <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo"> -->
									<p>My Project</p>
								</a>
								<span class="navbar-burger burger" data-target="navbarMenuHeroA">
									<span></span>
									<span></span>
									<span></span>
								</span>
							</div>

							<div id="navbarMenuHeroA" class="navbar-menu">
								<div class="navbar-end">
									<!-- <a class="navbar-item">
										About Us
									</a>
									<a class="navbar-item">
										Contact Us
									</a> -->
									
									<?php if(!isset($_SESSION["loggedIn"])) { ?>
									<span class="navbar-item">
										<a href="/login" class="is-inverted is-primary button">
											Login
										</a>
									</span>
								<?php }else{ ?>
									<a class="navbar-item" href="myProfile">
										Mein Profil
									</a>
									<a class="navbar-item" href="createBlog">
										Mein Blog
									</a>
								<?php } ?>
									<span class="navbar-item">
										<a href="/register" class="is-inverted is-primary button">
											Registration
										</a>
									</span>
									
									<?php if(isset($_SESSION["loggedIn"])) { ?>
									<a href="?logout=1" class="navbar-item">
										Logout
									</a>
									<?php } ?>

									
								</div>
							</div>
						</div>
					</nav>
				</div>
				<!-- Hero content: will be in the middle -->
				<div class="hero-body">
					<div class="container has-text-centered">
						<!-- <h1 class="title">
						Title
						</h1>
						<h2 class="subtitle">
						Subtitle
						</h2> -->
					</div>
				</div>
				<!-- Hero footer: will stick at the bottom -->
				<div class="hero-foot">
					<nav class="tabs">
						<div class="container">
							<ul>
								<li class="is-active"><a href="#about">Overview</a></li>
								<li><a href="#team">Modifiers</a></li>
								<li><a>Grid</a></li>
								<li><a>Elements</a></li>
								<li><a>Components</a></li>
								<li><a>Layout</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</section>
		</header>
		<main class="">
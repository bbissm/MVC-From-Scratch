<?php

	Route::set('home', function() {
		Index::CreateView('Index');	
	});

	Route::set('about-us', function() {
		AboutUs::CreateView('AboutUs');	
	});

	Route::set('contact-us', function() {
		ContactUs::CreateView('ContactUs');	
	});

	Route::set('register', function() {
		RegisterForm::CreateView('RegisterForm');	
	});

	Route::set('login', function() {
		LoginForm::CreateView('LoginForm');	
	});

	Route::set('createBlog', function() {
		CreateBlog::CreateView('CreateBlog');	
	});

	Route::set('myProfile', function() {
		EditProfile::CreateView('EditProfile');	
	});

	Route::set('index-twig', function() {
		EditProfile::CreateView('Index.html.twig');	
	});
?>
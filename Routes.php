<?php

	Route::set('index', function() {
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

?>
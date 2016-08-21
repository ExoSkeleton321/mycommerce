<?php
	session_start();

	// Unset Cookies
	if (isset($_SERVER['HTTP_COOKIE'])) {
	    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
	    foreach($cookies as $cookie) {
	        $parts = explode('=', $cookie);
	        $name = trim($parts[0]);

	        //Delete every cookie except $_COOKIE['listar']
	        if($name !== "listar"){
		        setcookie($name, '', time()-1000);
		        setcookie($name, '', time()-1000, '/');
		    }
	    }
	}

	session_destroy();
	header("Location: admin"); 
	exit();
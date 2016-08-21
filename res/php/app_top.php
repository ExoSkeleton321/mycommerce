<?php
	
	/***********************************************************/
	/*****************Autor: Jorge Brian Moreno*****************/
	/********************Proyecto: mycommerce*******************/
	/****************Fecha Inicio: Julio 9, 2016****************/
	/***********************************************************/
	
	session_start();
	if(file_exists("res/php/init.php")){
		require 'res/php/Functions.php';
		$obj = new Functions();

		//Get site details
		$site_details = $obj->getSiteDetails();

		//Get all categories
		$categories = $obj->getAllCategories();

		//Paypal setup
		
	}else{
		exit("Please run installation first! <a href='install'>Install</a>");
	}


?>
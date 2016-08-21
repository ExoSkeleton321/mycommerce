<?php
	
	/***********************************************************/
	/*****************Autor: Jorge Brian Moreno*****************/
	/********************Proyecto: mycommerce*******************/
	/****************Fecha Inicio: Julio 9, 2016****************/
	/***********************************************************/

	session_start();
	if(file_exists("../res/php/init.php")){
		require 'Functions_Admin.php';
		$obj = new Functions_Admin();

		//Get site details
		$site_details = $obj->getSiteDetails();

		if(isset($_SESSION['admin']) || isset($_COOKIE['admin'])):
			//Get site admins
			$site_admins = $obj->getAdmins();

			//Get users count
			$user_count = $obj->getNumberUsers();

			//Get admins count
			$admin_count = $obj->getNumberAdmins();

			//Get products count
			$product_count = $obj->getNumberProducts();
		endif;

	}else{
		exit("Please run installation first! <a href='install'>Install</a>");
	}


?>
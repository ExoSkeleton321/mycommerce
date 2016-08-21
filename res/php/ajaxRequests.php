<?php

if($_POST['type_req'] == "admin"){
	require 'Functions_Admin.php';
	$obj  = new Functions_Admin();

	if($_POST['request'] == "update_site_details"){
		$update = $obj->updateSite($_POST['site_name'], $_POST['site_phone'], $_POST['site_email'], $_POST['theme'], $_POST['site_letters']);

		if($update){
			echo "true";
		}else{
			echo "false";
		}
	}
}

if($_POST['type_req'] == "normal"){
	require 'Functions.php';
	$obj = new FUnctions();

	if($_POST['request'] == "new_user"){
		$newUser = $obj->newUser(
						$_POST['user_name'], 
						$_POST['user_last_name'], 
						$_POST['user_street'], 
						$_POST['user_state'], 
						$_POST['user_city'], 
						$_POST['user_local'],
						$_POST['user_cp'],
						$_POST['user_email'],
						$_POST['user_pass']
						);

		if($newUser){
			echo "true";
		}else{
			echo "false";
		}
	}
}
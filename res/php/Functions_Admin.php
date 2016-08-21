<?php
require 'init.php';
class Functions_Admin{
	public function getSiteDetails(){
		global $pdo;

		$getDetails = $pdo->prepare("
			SELECT *
			FROM site_details
			WHERE site_id = '1'
		");
		$getDetails->execute();

		return $getDetails->fetch();
	}

	public function updateSite($name, $phone, $email, $theme, $site_letters){
		global $pdo;

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$update = $pdo->prepare("
				UPDATE site_details
				SET site_name    	 = :name, 
					site_phone   	 = :phone, 
					site_email   	 = :email, 
					site_theme   	 = :theme,
					site_nav_letters = :letters,
					last_updated 	 = :last_updated
			");
			$update->execute([
				'name'  	   => htmlentities($name),
				'phone' 	   => htmlentities($phone),
				'email' 	   => $email,
				'theme' 	   => $theme,
				'letters'	   => $site_letters,
				'last_updated' => time()
			]);

			if($update){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function getAdmins(){
		global $pdo;

		$query = $pdo->prepare("
			SELECT * 
			FROM admins 
			ORDER BY name ASC
		");
		$query->execute();

		return $query->fetchAll();
	}

	public function getNumberUsers(){
		global $pdo;

		$query = $pdo->prepare("
			SELECT COUNT(*) AS user_count 
			FROM users
		");
		$query->execute();

		return $query->fetch();
	}

	public function getNumberAdmins(){
		global $pdo;

		$query = $pdo->prepare("
			SELECT COUNT(*) AS admin_count 
			FROM admins
		");
		$query->execute();

		return $query->fetch();
	}

	public function getNumberProducts(){
		global $pdo;

		$query = $pdo->prepare("
			SELECT COUNT(*) AS product_count 
			FROM products
		");
		$query->execute();

		return $query->fetch();
	}
}
	
?>
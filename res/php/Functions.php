<?php
require 'init.php';

class Functions{
	public function getAllCategories(){
		global $pdo;

		$getCat = $pdo->prepare("
			SELECT *
			FROM categories

			ORDER BY category ASC
		");
		$getCat->execute();

		return $getCat->fetchAll();
	}

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

	public function newUser($name, $last_name, $street, $state, $city, $local, $cp, $email, $pass){
		global $pdo;

		$pass = password_hash($pass, PASSWORD_BCRYPT);

		$insert = $pdo->prepare("
			INSERT INTO users (user_name, user_last_name, user_email, user_pass, user_street, state_id, city_id, local_id, user_cp, time_joined, user_token)
			VALUES (:name, :last_name, :email, :pass, :street, :state, :city, :local, :cp, :time, :token)
		");
		$insert->execute([
			'name' 		=> $name,
			'last_name' => $last_name,
			'email'	 	=> $email,
			'pass' 		=> $pass,
			'street' 	=> $street,
			'state' 	=> $state,
			'city' 		=> $city,
			'local' 	=> $local,
			'cp' 		=> $cp,
			'time' 		=> time(),
			'token' 	=> md5($email)
		]);

		if($insert){
			echo "true";
		}else{
			echo "false";
		}
	}
}
	
?>
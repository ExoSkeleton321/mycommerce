<?php
session_start();

require 'init.php';

	if(!empty($_POST['email']) && !empty($_POST['pass'])){

		$email = $_POST['email'];
		$pass  = $_POST['pass'];
		
		$query = $pdo->prepare("SELECT * FROM admins WHERE email = BINARY(?)");
		$query->bindValue(1, $email);
		$query->execute();          
                        
		$count = $query->rowCount();

		if($count > 0){
			$info       = $query->fetch();
			$storedPass = $info['password'];
			
			if(password_verify($pass, $storedPass)){

				if(isset($_POST['remember-me'])){
					//setcookie(name, value, expire, path, domain, secure, httponly);
					setcookie('admin', md5($email), time() + 864000, '/', '', isset($_SERVER["HTTPS"]), true);
				}else if(!isset($_POST['remember-me'])){
					$_SESSION['admin'] = md5($email);
				}

				echo "true";
				exit();
			}else{
				echo "false1";
				exit();
			}
		}else{
			echo "false2";
			exit();
		}
        
	}else{
		echo "false3";
	}
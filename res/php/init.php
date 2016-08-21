<?php
 define("ROOT_DIR", "/home/brian/lampstack-5.6.24-0/apache2/htdocs/mycommerce/");
				define("ROOT_HOST", "http://localhost:8080/mycommerce/");
				define("ROOT_IP", "http://127.0.1.1:8080/mycommerce/");
				date_default_timezone_set("America/Mexico_City");
				try{
					define("HOST", "localhost");
					define("DB", "mycommerce");
					define("USER", "root");
					define("PASS", "root321");
					$pdo = new PDO("mysql:host=".constant("HOST").";dbname=".constant("DB")."", constant("USER"), constant("PASS"));
				}catch(PDOException $error){
					exit("Error conectandose a la base de datos.");
				}
?>
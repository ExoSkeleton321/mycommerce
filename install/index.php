<?php
	$myfile = fopen("../res/php/init.php", "w") or die("Failed to create file!");
	
	//Get url
	$url  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
	$url .= $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'];
	$url .= $_SERVER['REQUEST_URI'];
	$url  = explode('/', $url);
	unset($url[4]);
	$url  = implode('/', $url);

	$url2  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
	$url2 .= getHostByName(getHostName()) . ":" . $_SERVER['SERVER_PORT'];
	$url2 .= $_SERVER['REQUEST_URI'];
	$url2  = explode('/', $url2);
	unset($url2[4]);
	$url2  = implode('/', $url2);
	
	$txt = "<?php\n"
			. ' define("ROOT_DIR", "' . str_replace('\\', '/', dirname(__DIR__)) . '/");
				define("ROOT_HOST", "' . $url . '");
				define("ROOT_IP", "' . $url2 . '");
				date_default_timezone_set("America/Mexico_City");
				try{
					define("HOST", "localhost");
					define("DB", "mycommerce");
					define("USER", "root");
					define("PASS", "root321");
					$pdo = new PDO("mysql:host=".constant("HOST").";dbname=".constant("DB")."", constant("USER"), constant("PASS"));
				}catch(PDOException $error){
					exit("Error conectandose a la base de datos.");
				}'
		 . "\n?>";
	fwrite($myfile, $txt);
	fclose($myfile);
	header("Location: ../");
	exit();
?>
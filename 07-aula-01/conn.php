<?php 

	$host = 'localhost';
	$db = 'shop';
	$user = 'root';
	$password = "";


	try {
		$conn = new PDO("mysql:host={$host};dbname={$db}", $user, $password);	
	} catch (PDOException $erro) {
		echo "OCorreu um erro: $erro";
	}

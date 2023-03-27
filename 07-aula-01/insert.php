<?php 
	

	include 'conn.php';

	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = filter_input(INPUT_POST, "price");

	//echo "$name - $description - $price";


	$stmt = $conn->prepare("insert into product (name, description, price) values (:name, :desc, :price)");

	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':desc', $description);
	$stmt->bindParam(':price', $price);

	$stmt->execute(); 

	header("Location: index.php");


 ?>
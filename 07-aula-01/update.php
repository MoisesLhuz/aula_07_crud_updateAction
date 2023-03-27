<?php 

	include 'conn.php';

	$id = $_GET['id'];

	$stmt = $conn->prepare("select * from product where id = :id");

	$stmt->bindParam(':id', $id);

	$stmt->execute();

	$items = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>	
	<style>
		.button button{
			margin-top: 10px;
 			background: lightblue;
 			padding: 10px 20px;
 			border-radius: 4px; 
 			border: none;
		}
		.button button:hover{
			background: yellow;
		}

		.button a{
	 		position: absolute;
 			text-decoration: none; 			
 			background: lightblue;
 			padding: 9px 20px;
 			border-radius: 4px; 
 			top: 241px;
 			left: 150px; 
 			color: black;
	 	}
 		.button a:hover{
			background: yellow;
 		}
	</style>
</head>	
<body>
	<form action="updateAction.php" method="post">
		<input type="hydden" name="id" value="<?=$items['id']; ?>" readonly>
		<div>
			<input type="text" name="name" value="<?=$items['name']; ?>">
		</div>
		<div>
			<textarea name="description" id="" cols="30" rows="10"><?=$items['description']; ?></textarea>
		</div>
		<div>
			<input type="text" name="price" value="<?=$items['price']; ?>">
		</div>
		<div class="button">
			<button type="submit">Editar Cadastro</button>
			<a href="list.php" class="redirect">Voltar</a>
		</div>
	</form>	
</body>
</html>


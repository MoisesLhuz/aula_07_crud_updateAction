<?php 

	include 'conn.php';

	$stmt = $conn->prepare("select * from product order by name");

	$stmt->execute();

	$items = $stmt->fetchALL(PDO::FETCH_ASSOC);

	

	/*foreach ($items as $row) {
		//echo $row['name']. $row['description']. $row['price']. "<br>";
		foreach ($row as $key => $value) {
			echo "$key: $value <br>";
		}
	} */

 ?>

 <!DOCTYPE html>
 <html lang="ept-br">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style>
 		.redirect{
 			position: absolute;
 			text-decoration: none; 			
 			background: lightblue;
 			padding: 10px 20px;
 			border-radius: 4px;
 			margin-top: 5px;
 		}
 		.redirect:hover{
 			background: yellow;
 		}
 	</style>
 </head>
 <body>
 	<table border="1">
 		
	 	<tr>
	 		<th>Codigo do Produto</th>
	 		<th>Nome</th>
	 		<th>Valor</th>
	 		<th>Descrição</th>
	 		<th>Ações</th>
	 	</tr>

	 	<?php foreach ($items as $row): ?>

	 	<tr>
	 		<td><?=$row['id']; ?></td>
	 		<td><?=$row['name']; ?></td>
	 		<td><?=$row['price']; ?></td>
	 		<td><?=$row['description']; ?></td>
	 		<td>
	 			<a href="update.php?id=<?=$row['id']; ?>">
	 				Editar
	 			</a>
	 			|
	 			<a href="delete.php?id=<?=$row['id']; ?>">
	 				Excluir
	 			</a>
	 		</td>
	 	</tr>
	 <?php endforeach ?>
 	</table>
 	<div>
 		<a href="index.php" class="redirect">Voltar</a>
 	</div>
 	
 </body>
 </html>
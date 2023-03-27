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
 			top: 292px;
 			left: 115px; 
 			color: black;
	 	}
 		.button a:hover{
			background: yellow;
 		}
	</style>

</head>
<body>
	<h1>Cadastro de Produtos</h1>
	<form action="insert.php" method="post">
		<div>
			<input type="text" name="name" placeholder="Nome">
		</div>
		<div>
			<textarea name="description" id="" cols="30" rows="10"></textarea>			
		</div>
		<div>
			<input type="text" name="price" placeholder="Valor">
		</div>
		<div class="button">
			<button type="submit">Cadastrar</button>
			<a href="list.php">Lista</a>
		</div>		
	</form>
	
</body>
</html>
<?php
	include_once 'loginraiz.php';
	
	$descricao = $_POST['descricao'];	#o first que ta dentro da chave eh igual ao do form do html
	$data = $_POST['data'];
	$endereco = $_POST['endereco'];
	
	
	$sql = "INSERT INTO entregas (descricao, data, endereco) VALUES ('$descricao', '$data', '$endereco');";
	
	mysqli_query($conn, $sql);
	
	//-----------------------------------------------------------------------------
	?>
	
	<html>
	<link rel="stylesheet" href="styles.css">
	<div class = "teste">

<p> Os dados foram inseridos com sucesso! </p> <br>

<a href="Page6.html"> Clique aqui para voltar à página inicial </a>

	</div>


</html>
	
	
<?php
	include_once 'loginraiz.php';
	
	$pedido = $_POST['pedido'];	#o first que ta dentro da chave eh igual ao do form do html
	$descricao = $_POST['descricao'];
	$data = $_POST['data'];
	
	
	$sql = "INSERT INTO pedidoss (pedido, descricao, data) VALUES ('$pedido', '$descricao', '$data');";
	
	mysqli_query($conn, $sql);
	
	//-----------------------------------------------------------------------------
	?>
	<html>
	<link rel="stylesheet" href="styles.css">
	<div class = "teste">

<p> Os dados foram inseridos com sucesso! </p> <br>

<a href="Page4.html"> Clique aqui para voltar à página inicial </a>
	</div>



</html>
	
	
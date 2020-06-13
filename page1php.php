<?php
	include_once 'loginraiz.php';
	
	$ar = $_POST['ar'];	#o ar que ta dentro da chave eh igual ao do form do html
	$valor = $_POST['valor'];
	$data = $_POST['data'];
	
	
	$sql = "INSERT INTO caixa2 (ar, valor, date) VALUES ('$ar', '$valor', '$data');";
	
	mysqli_query($conn, $sql);
	
	//em cima ele ta jogando na base de dados e embaixo ele printa a base de dados
	
	?>
	<html>
	<link rel="stylesheet" href="styles.css">
	<div class = "teste">

<p> <b>Os dados foram inseridos com sucesso! </b></p> <br>

<a href="Page1.html"> Clique aqui para voltar à página inicial </a>
	</div>



</html>

	
	
	
	
	
<?php
	include_once 'loginraiz.php';
	
	$nome = $_POST['nome'];	#o first que ta dentro da chave eh igual ao do form do html
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	
	
	$sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone');";
	
	mysqli_query($conn, $sql);
	
	//-----------------------------------------------------------------------------
	
	?>
	
	<html>
	<link rel="stylesheet" href="styles.css">
	<div class = "teste">
<p> Os dados foram inseridos com sucesso! </p> <br>

<a href="Page2.html"> Clique aqui para voltar à página inicial </a>
</div>



</html>
	
<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class = "teste">

<?php

include_once 'loginraiz.php';

$print = "SELECT * from pedidoss;";
	$result = mysqli_query($conn, $print);
	$resultcheck = mysqli_num_rows($result);
	
	if ($resultcheck > 0) {
		echo "Veja os pedidos. <br>";
		while ($row = mysqli_fetch_assoc($result)) {
		echo $row['pedido']." | ".$row['descricao']." | ".$row['data']."<br>";
		
		}
	}



?>



	<br>
	<a href="Page2.html"> Clique aqui para voltar à página inicial </a>
	</div>
	</html>
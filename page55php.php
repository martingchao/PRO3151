<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class = "teste">
<?php

include_once 'loginraiz.php';

$print = "SELECT * from instalacoes;";
	$result = mysqli_query($conn, $print);
	$resultcheck = mysqli_num_rows($result);
	
	if ($resultcheck > 0) {
		echo "Veja as instalações. <br>";
		while ($row = mysqli_fetch_assoc($result)) {
		echo $row['descricao']." | ".$row['data']." | ".$row['endereco']."<br>";
		
		}
	}


?>



	<br>
	<a href="Page5.html"> Clique aqui para voltar à página inicial </a>
	</div>
	</html>
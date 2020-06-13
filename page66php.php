<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class = "teste">

<?php

include_once 'loginraiz.php';

$print = "SELECT * from entregas;";
	$result = mysqli_query($conn, $print);
	$resultcheck = mysqli_num_rows($result);
	
	if ($resultcheck > 0) {
		echo "Veja o registro de entregas. <br><br>";
		while ($row = mysqli_fetch_assoc($result)) {
		echo $row['descricao']." | ".$row['data']." | ".$row['endereco']."<br>";
		
		}
	}
	
	?>
	
	
	<html>
	<br>
	<a href="Page6.html"> Clique aqui para voltar à página inicial </a>
	</div>
	</html>
	
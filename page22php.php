<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class = "teste">


<?php

include_once 'loginraiz.php';

$print = "SELECT * from contatos;";
	$result = mysqli_query($conn, $print);
	$resultcheck = mysqli_num_rows($result);
	
	if ($resultcheck > 0) {
		echo "Veja os seus contatos cadastrados. <br><br>";
		while ($row = mysqli_fetch_assoc($result)) {
		echo $row['nome']." | ".$row['email']." | ".$row['telefone']."<br>";
		
		}
	}


?>


<html>
	<br>
	<a href="Page2.html"> Clique aqui para voltar à página inicial </a>
	
	</div>
</body>
	</html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class = "teste">
	<?php

		include_once 'loginraiz.php';
		
		$query="select SUM(valor) as `sumvalor` from caixa2";
		$res=mysqli_query($conn, $query);
		$x=mysqli_fetch_array($res);
		echo "Atualmente há "."<b>".$x['sumvalor']." reais </b> no caixa da empresa.";
		
	$print = "SELECT * from caixa2;";
		$result = mysqli_query($conn, $print);
		$resultcheck = mysqli_num_rows($result);
		
		if ($resultcheck > 0) {
			echo "<br><br>Veja as últimas movimentações no caixa. <br><br>";
			while ($row = mysqli_fetch_assoc($result)) {
			echo $row['ar']." | ".$row['valor']." reais"." | ".$row['date']."<br>";
			
			}
		}
		
		?>
		
		
		<br>
		<a href="Page1.html"> Clique aqui para voltar à página inicial </a>
	</div>
</body>
	</html>
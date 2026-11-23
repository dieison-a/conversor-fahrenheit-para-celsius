<?php

$fahrenheit = $_POST['fahrenheit'];

// conversão
$celsius = ($fahrenheit - 32) * 5 / 9;
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Resultado da Conversão</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<main class="card">
			<h1>Resultado da Conversão</h1>
			<p>Temperatura em Fahrenheit: <?php echo number_format($fahrenheit, 1, ',', '.'); ?> °F</p>
			<p>Temperatura em Celsius: <strong><?php echo number_format($celsius, 1, ',', '.'); ?> °C</strong></p>
		</main>
	</body>
</html>
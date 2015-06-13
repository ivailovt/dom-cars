<!DOCTYPE html>
<html>
	<head>
		<title>Show all cars</title>
		<meta charset="UTF-8">
	</head>
<body>
	<h2 align="center">Всички автомобили</h2>
		<table border="1" align="center">
			<th>№</th>
			<th>Модел</th>
			<th>Година на производство</th>
			<th>Цена</th>
			<th>Максимална скорост</th>

<?php
		$num = 1;
	foreach($show_cars as $car){
		echo "<tr>";
		echo "<td>$num</td>";
		echo "<td>$car[model]</td>";
		echo "<td>$car[year]</td>";
		echo "<td>$car[price]</td>";
		echo "<td>$car[max_speed]</td>";
		echo "</tr>";
		$num++;
	}
		echo "</table>";
?>

</body>
</html>
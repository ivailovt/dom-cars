<!DOCTYPE html>
<html>
	<head>
		<title>Автомобили</title>
		<meta charset="UTF-8">
	</head>
<body>
	<h2 style="color: green;" align="center">Въведи автомобил:</h2>
		<table border="0" cellpadding="5">
		<form method="post" action="add_car">
			<tr>
				<td>Модел:</td><td><input type="text" name="model"></td><td style="color: red;"><i> <?php echo form_error('model'); ?> </i></td>
			</tr>
			<tr>
				<td>Година:</td><td><input type="text" name="year"></td><td style="color: red;"><i> <?php echo form_error('year'); ?> </i></td>
			</tr>
			<tr>
				<td>Цена:</td><td><input type="text" name="price"></td><td style="color: red;"><i> <?php echo form_error('price'); ?> </i></td>
			</tr>
			<tr>
				<td>Макс.скорост:</td><td><input type="text" name="speed"></td><td style="color: red;"><i> <?php echo form_error('speed'); ?> </i></td>
			</tr>
			<tr>
				<td></td><td align="right"><input type="submit" value="Въведи"></td><td></td>
			</tr>
		</form>
		<form method="post"	action="view_all_cars">
			<tr>
				<td></td><td><input type="submit" value="Виж всички автомобили"></td><td></td>
			</tr>
		</form>
		</table>
</body>
</html>
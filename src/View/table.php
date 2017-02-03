<?php 
require '../Controllers/ArmoireController.php';
require_once '../vendor/j4mie/idiorm/idiorm.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Armoire Static</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<?php foreach($socks as $sock):?>

		<table class="ui table">

			<tr>
				<td><?=$sock->couleur; ?></td>
				<td><?=$sock->pointure; ?></td>
				<td><?=$sock->temp_lavage; ?></td>
				<td><?=$sock->date_lavage; ?></td>
			</tr>

		</table>

	<?php endforeach;?>

</body>
</html>

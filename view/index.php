<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Armoire Static</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<?php foreach():?>

		<table>

			<tr>
				<td><?php echo $this->$id['id'];?></td>
			</tr>

		</table>

	<?php endforeach;?>

</body>
</html>

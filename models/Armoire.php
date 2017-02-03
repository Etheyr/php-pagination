<?php
require_once '../vendor/j4mie/idiorm/idiorm.php';

class Armoire {

	private $db;
	private $id;

	public function __construct(){

		ORM::configure('mysql:host=localhost;dbname=my_blog');
		ORM::configure('username', 'root');
		ORM::configure('password', 'SIMPLONCO');

		$this->db = ORM::for_table('mes_chaussettes');
	}


	public function getInstance(){

		return $this->db;

	}

	static function all($limit, $offset){

		return $this->db;

	}

	static function get($id){

		return $this->id;

	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Armoire Static</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<?php foreach($this->db as $this->id):?>

		<table>

			<tr>
				<td><?php echo $this->$id['id'];?></td>
			</tr>

		</table>

	<?php endforeach;?>

</body>
</html>

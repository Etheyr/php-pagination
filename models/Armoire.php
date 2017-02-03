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


	static public function getInstance(){

		return $this->db;

	}

	static public function all($limit=50, $offset=0){

		$new = new self();

		$result = $new->getInstance()
		->limit($limit)
		->offset($offset)
		->findMany();

		return $result;
	}

	static public function get($id){

		$new = new self();

		return $new->db->findOne($id);

	}
}
?>


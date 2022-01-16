<?php

require_once 'Database.php';

class CommandeDB {
	private $db;

	public function __construct() {
		$this->db= new Database();
	}

	public function read($idproduit) {
		$sql= 'select * from produit where idproduit= ?';
		$attributes= array($idproduit);
		$req= $this->db->prepare($sql, $attributes);
		$data= $this->db->recover($req, true);
		return $data;
	}
}

?>
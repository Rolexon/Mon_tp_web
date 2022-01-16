<?php

require_once 'Database.php';

class UtilisateurDB {
	private $db;

	public function __construct() {
		$this->db= new Database();
	}

	
	public function readCompte($login, $password) {
		$sql= 'select * from utilisateur where login= ? and password= ?';
		$attributes= array($login, $password);
		$req= $this->db->prepare($sql, $attributes);
		$data= $this->db->recover($req, true);
		return $data;
	}
	public function update($login, $password) {
		$sql= 'update utilisateur set login= ?, password= ? where idutilisateur= 1';
		$attributes= array($login, $password);
		$this->db->prepare($sql, $attributes);
	}
}

?>
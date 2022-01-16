<?php

require_once 'Database.php';

class ProduitDB {
	private $db;

	public function __construct() {
		$this->db= new Database();
	}

	public function create($image, $libelle, $quantite, $prix) {
		$sql= 'insert into produit set image= ?,libelle= ?,quantite= ?,prix= ?';
		$attributes= array($image, $libelle, $quantite, $prix);
		$this->db->prepare($sql, $attributes);
	}

	public function read($idproduit) {
		$sql= 'select * from produit where idproduit= ?';
		$attributes= array($idproduit);
		$req= $this->db->prepare($sql, $attributes);
		$data= $this->db->recover($req, true);
		return $data;
	}
	public function readAll() {
		$sql= 'select * from produit';
		$req= $this->db->prepare($sql);
		$datas= $this->db->recover($req);
		return $datas;
	}

	public function readAllQuantite() {
		$sql= 'select * from produit where quantite > 0';
		$req= $this->db->prepare($sql);
		$datas= $this->db->recover($req);
		return $datas;
	}

	public function update($idproduit, $image, $libelle, $quantite, $prix) {
		$sql= 'update produit set image= ?, libelle= ?, quantite= ?, prix= ? where idproduit= ?';
		$attributes= array($image, $libelle, $quantite, $prix, $idproduit);
		$this->db->prepare($sql, $attributes);
	}

	public function delete($idproduit) {
		$sql= 'delete from produit where idproduit= ? limit 1';
		$attributes= array($idproduit);
		$this->db->prepare($sql, $attributes);
	}
}

?>
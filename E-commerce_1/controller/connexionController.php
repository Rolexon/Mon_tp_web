<?php

require_once 'controller.php';

$action = $_GET['action'];

if ($action == "connection") {
	$login= $_POST['login'];
	$password= $_POST['password'];

	$utilisateur= $utilisateurdb->readCompte($login, $password);

	if($utilisateur == false) {
	header('Location:../index.php?m=2&message=Echec de connexion');
	}
	else {
	header('Location:../produitAdmin/index.php?error=0&message=Bienvenue sur ComputerShop');
	}
}

if ($action == "verif") {
	$login= $_POST['login'];
	$password= $_POST['password'];

	$utilisateur= $utilisateurdb->readCompte($login, $password);

	if($utilisateur == false) {
	header('Location:../index.php?m=2&message=Echec de la verification');
	}
	else {

	header('Location:../updateUser.php?error=0&m=1');
	}
}

if ($action == "update") {
	$login= $_POST['login'];
	$password= $_POST['password'];

	$utilisateur= $utilisateurdb->update($login, $password);

	header('Location:../index.php?m=1');
}

?>
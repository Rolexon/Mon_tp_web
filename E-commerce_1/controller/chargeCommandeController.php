
<?php

require_once 'controller.php';

$id= $_GET['id'];
$nbr= $_GET['nbre'];

header("Location:../produitClient/produit.php?nbre=$nbr&id=$id");
	
?>
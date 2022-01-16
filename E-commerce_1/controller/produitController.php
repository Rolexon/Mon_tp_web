
<?php

require_once 'controller.php';

$action= $_GET['action'];

	if($action == 'create') {

		$target_dir = "../uploads/";
		$target_file = $target_dir.$_FILES["ficher"]["name"];

		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			echo "Sorry, only JPG, JPEG and PNG files are allowed. ";
		}

		if(is_uploaded_file($_FILES["ficher"]["tmp_name"])) {
			if(!move_uploaded_file($_FILES["ficher"]["tmp_name"], $target_file)) {
				echo "Problem could not move file to destination. Please check again later. <a href='index.php'>Please go back.</a>";
					exit;
			}
		} else {
			echo "Problem: Possible file upload attack. Filename: ";
			echo $_FILES["ficher"]["name"];
				exit;
		}

		$image= $target_file;
		$libelle= $_POST['libelle'];
		$quantite= $_POST['quantite'];
		$prix= $_POST['prix'];

			$produitdb->create($image,$libelle,$quantite,$prix);
			header('Location:../produitAdmin/index.php?error=0&message=Produit ajouté&m=1');

	}

	if($action == 'delete') {
      	$idproduit= $_GET['idproduit'];
		$produitdb->delete($idproduit);
		header('Location:../produitAdmin/index.php?error=0&message=Produit supprimém=3');
	}

	if($action == 'update') {

		if (isset($_POST['ficher'])) {
			$target_dir = "../uploads/";
			$target_file = $target_dir.$_FILES["ficher"]["name"];

			$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
			if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				echo "Sorry, only JPG, JPEG and PNG files are allowed. ";
			}

			if(is_uploaded_file($_FILES["ficher"]["tmp_name"])) {
				if(!move_uploaded_file($_FILES["ficher"]["tmp_name"], $target_file)) {
					echo "Problem could not move file to destination. Please check again later. <a href='index.php'>Please go back.</a>";
						exit;
				}
			} else {
				echo "Problem: Possible file upload attack. Filename: ";
				echo $_FILES["ficher"]["name"];
					exit;
			}
			$idproduit= $_POST['idproduit'];
			$image= $target_file;
			$libelle= $_POST['libelle'];
			$quantite= $_POST['quantite'];
			$prix= $_POST['prix'];

			$produitdb->update($idproduit,$image,$libelle,$quantite,$prix);
			header('Location:../produitAdmin/index.php?error=0&message=Produit modifié&m=2');
		}
		else{
			$idproduit= $_POST['idproduit'];
			$image= $_POST['memeImage'];
			$libelle= $_POST['libelle'];
			$quantite= $_POST['quantite'];
			$prix= $_POST['prix'];

			$produitdb->update($idproduit,$image,$libelle,$quantite,$prix);
			header('Location:../produitAdmin/index.php?error=0&message=Produit modifié&m=2');
		}

}

?>
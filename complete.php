<?php
include("Connect.php");
$nom = $_POST['nom'];
$email = $_POST['email'];
$gmail = $_POST['gmail'];
$tel = $_POST['tel'];
$classe = $_POST['classe'];
$etablissement = $_POST['etablissement'];
$cookie = $_COOKIE['nom'];
if(isset($cookie)){
	$bdd->exec("INSERT INTO complete (nom,email,gmail,tel,classe,etablissement,cookie,heure,date) VALUES
('$nom','$email','$gmail','$tel','$classe','$etablissement','$cookie',NOW(), NOW());" );
header('location:forum.php');
}else{
	echo 'Votre demande à échouer vérifier les données et réesayer';
header('location:profil.php');	
}

?>
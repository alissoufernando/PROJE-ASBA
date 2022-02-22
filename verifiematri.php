<?php 
$matricull = $_POST['matricul'];
// Vérification des identifiants
include("connect.php");
$req = $bdd->prepare('SELECT id FROM matricul WHERE nummatricul = :numero');
$req->execute(array('numero' => $matricul));
	$resultat = $req->fetch();
if ($matricul == $matricull)
{
	session_start();
    $_SESSION['matricul'] = $matricul;
	include("forum.php");
}
else
{
    echo 'Vous avez entrer un mauvais matricul';
	include("continu.php");
}
?>
<?php 
// Hachage du mot de passe
$motpass_hache = MD5($_POST['motpass']);
$numero = $_POST['numero'];
// Vérification des identifiants
include("connect.php");
$req = $bdd->prepare('SELECT id FROM inscription WHERE numero = :numero AND confirmpass = :motpass');
$req->execute(array(
    'numero' => $numero,
    'motpass' => $motpass_hache));
$resultat = $req->fetch();

if (!$resultat)
{
	header('location:inscription.php');
}
else
{
	session_start();
    $_SESSION['numero'] = $numero;
	$_SESSION['motpass'] = $motpass_hache;
	setcookie('nom', $numero, time() + 365*24*3600,true);
	setcookie('pass', $motpass_hache, time() + 365*24*3600,true);
	header ('Location:forum.php');
}
?>
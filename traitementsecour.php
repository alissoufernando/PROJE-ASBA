<?php 
// Hachage du mot de passe
$motdesecour = MD5($_POST['motprincipal']);
// Vérification des identifiants
include("connect.php");
$req = $bdd->prepare('SELECT id FROM inscription WHERE confirmpass = :motpass');
$req->execute(array(
    'motpass' => $motdesecour));
$resultat = $req->fetch();

if (!$resultat)
{
	header('location:erreurvrai.html');
}
else
{
// mise à jour de la table publication photo
$req = $bdd->prepare('UPDATE inscription SET secoure = :passe WHERE numero = :num');
$req->execute(array(
'passe' => $_COOKIE['motdesecoure'] ,
'num' => $_COOKIE['nom'] 
));
header ('location:forum.php');
}
?>
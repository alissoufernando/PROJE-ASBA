
<?php session_start ();
include("connect.php");?>
<?php 
$pseudo = addslashes($_POST['pseudodestinataire']);
$message = addslashes($_POST['messageaenvoyer']);
$photoprofil = $_COOKIE['photoprofil'];
$nomenvoyeur = $_COOKIE['nom'];

$_SESSION['pseudo'] = $pseudo ;
$_SESSION['message'] = $message;
$_SESSION['photo'] = $photoprofil;
$_SESSION['nom'] = $nomenvoyeur;

$req = $bdd->prepare('SELECT id FROM inscription WHERE numero = :numero');
$req->execute(array(
    'numero' => $pseudo));
$resultat = $req->fetch();

if (!$resultat OR $pseudo == $nomenvoyeur)
{
    
header('location:messageperso3.php');

}
else
{

header('location:verifie2.php');

}
?>


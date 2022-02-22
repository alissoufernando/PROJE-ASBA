
<?php 
// Hachage du mot de passe
$secoure = $_POST['secoureverification'];
$nomutilisateur = $_POST['pseudo_utilisateur'];
// Vérification des identifiants
include("connect.php");
$req = $bdd->prepare('SELECT id FROM inscription WHERE numero = :numero AND secoure = :motpass');
$req->execute(array(
    'numero' => $nomutilisateur,
    'motpass' => $secoure));

$resultat = $req->fetch();

if (!$resultat)
{
	header('location:motdepasseoublier.php');
}
else
{
	session_start();
    $_SESSION['numero'] = $nomutilisateur;
	$_SESSION['motpass'] = $secoure;
	setcookie('nom', $nomutilisateur, time() + 365*24*3600,true);
	header ('Location:verificationpersonne.php');
}
?>
<?php
 session_start();
 ?>
 <?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
 <?php
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$reponses = addslashes($_POST['reponse']);
$photoprofil = $_COOKIE['photoprofil'];
$nomutilisateur = $_COOKIE['nom'];
$idmessage = $_SESSION['identifiant'];
setcookie('id', $idmessage, time() + 365*24*3600,true);
if (isset($idmessage)) //Si 
{
$bdd->exec("INSERT INTO repponses (reponse,photodeprofil,nomutilisateur,iddumessage,date,heure) VALUES
('$reponses','$photoprofil','$nomutilisateur','$idmessage', NOW(),NOW());" );
header('location:forum4.php');
}
else //Sinon
{
echo 'Votre message n\'a pas été envoyer vérifier la connexion réseau et réessayer à nouveau';
header('location:reponse.php');
}
?> 
<?php
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$sujet = $_POST['nomsujet'];
$passe = $_POST['motdepasse'];
$photoprofil = $_COOKIE['photoprofil'];
$nomutilisateur = $_COOKIE['nom'];
if (!isset($nomdusujet)) //Si 
{
$bdd->exec("INSERT INTO sujet (sujer,motdepasse,photodeprofil,nomutilisateur,date,heure) VALUES
('$sujet', MD5('$passe'),'$photoprofil','$nomutilisateur', NOW(),NOW());" );
header('location:forum1.php');	
}
else //Sinon
{
echo 'Le sujet n\'a pas été sauvegarder veillez vérifier votre connexion à internet et recommancer';
header('location:sujet.html');
}
?> 
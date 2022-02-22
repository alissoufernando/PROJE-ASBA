
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?><?php
session_start();
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>

<?php

$idsujet = $_GET['idsujet'];
$nomenvoyeur = $_GET['nompersonne'];
$nomreceveur = $_GET['monnom'];
$bdd->exec("INSERT INTO invitationforum (idsujet,nomrecepteure,nomenvoyeure,dateheure) VALUES
('$idsujet','$nomenvoyeur','$nomreceveur',NOW());" );
header('location:forum1.php');

?>
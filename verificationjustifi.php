<?php session_start () ?>
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
include("connect.php");
$pseudo = $_SESSION['pseudo'] ;
$message= $_SESSION['message'] ;
$photoprofil = $_SESSION['photo'] ;
$nomenvoyeur = $_SESSION['nom'] ;

$bdd->exec("INSERT INTO amis1 (nomenvoyeur,dateheure) VALUES
('$nomenvoyeur',NOW());");
    
$reponse = $bdd->query('SELECT id FROM amis1 ORDER BY id DESC LIMIT 0,1');
while ($donnees = $reponse->fetch())
{
?>

<?php $id = $donnees['id'] ?>

<?php $bdd->exec("INSERT INTO amis (nomamis,nomdusecond,photoprofil,idsecondaire,date,heure) VALUES
('$pseudo','$nomenvoyeur','$photoprofil','$id',NOW(),NOW());");?>

<?php $bdd->exec("INSERT INTO amis (nomamis,nomdusecond,photoprofil,idsecondaire,date,heure) VALUES
('$nomenvoyeur','$pseudo','$photoprofil','$id',NOW(),NOW());");?>

<?php
}
$reponse->closeCursor();

$bdd->exec("INSERT INTO messageprive (pseudodestinataire,nomenvoyeur,message,photoprofil,identifiantdumessage,date,heure) VALUES
('$pseudo','$nomenvoyeur','$message','$photoprofil','$id',NOW(),NOW());");

header('location:messageperso3.php');

?>
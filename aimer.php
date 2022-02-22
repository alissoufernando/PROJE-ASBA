<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php include 'connect.php';?>

<?php $id =$_GET['id']; ?>

<?php $reponse = $bdd->prepare('SELECT * FROM publication WHERE id = ?');
$reponse->execute(array($id));
while ($donnees = $reponse->fetch())
{
?>
<?php $aimer = $donnees['aimer'];
$aimer++;
;?>
<?php
}
$reponse->closeCursor();
?>

<?php
// mise à jour de la table publication photo
$req = $bdd->prepare('UPDATE publication SET aimer = :aimer WHERE 	id = :num');
$req->execute(array(
'aimer' => $aimer,
'num' => $id 
));
?>
<?php
header ('location:forum.php');
?>
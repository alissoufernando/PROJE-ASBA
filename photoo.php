<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
$reponse = $bdd->prepare('SELECT nomphoto FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC LIMIT 0,1');
$reponse->execute(array($donnees['numero']));
while ($donnees = $reponse->fetch())
{
?>
<img src="photoprofil/<?php echo $donnees['nomphoto'];?>" width="50px" height="50px" style="border-radius:80px;border:1px solid #fff;">
<?php
}
$reponse->closeCursor();
?>
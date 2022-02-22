<?php
$reponse = $bdd->prepare('SELECT nomphoto FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC LIMIT 0,1');
$reponse->execute(array($donnees['numero']));
while ($donnees = $reponse->fetch())
{
?>
<a href="photoprofil/<?php echo $donnees['nomphoto'];?>"><img src="photoprofil/<?php echo $donnees['nomphoto'];?>" width="110px" height="110px" style="border-radius:80px;border:4px solid #fff;"></a>
<?php
}
$reponse->closeCursor();
?>
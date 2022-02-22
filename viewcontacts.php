<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
include 'connect.php';
$reponse = $bdd->prepare('SELECT * FROM contact WHERE nom_enregistreur = ? ORDER BY nom_personne ASC');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<div class="afficher">
<div class="photo"><img src="lescontatcts/<?php echo $donnees['photo_personne'];?>" width="60px" height="60px" style="border-radius:50px;border:4px solid #000;"></div>


        <div class="nom"><?php if (!isset($donnees['nom_personne'])){echo "Auncune données à propos";}
                                   echo $donnees['nom_personne'];?></div>
        <div class="conatct"><?php echo $donnees['contact_personne'];?></div>
        <div class="email"><?php echo $donnees['email_personne'];?></div></div>

<?php
}
$reponse->closeCursor();
?>
<?php
$reponse = $bdd->prepare('SELECT * FROM messageprive WHERE identifiantdumessage = ? ');
$reponse->execute(array($_COOKIE['identifiantmessagepersonne']));
while ($donnees = $reponse->fetch())
{
?>
<div style="height: 50px;">

<p style="font-weight: bold;font-family: forte;font-size: 17px;"><?php if ($donnees['nomenvoyeur'] == $_COOKIE['nom'])
{
        include ('propietaire.php');
        }else{
                include ('seconde.php');            
                };?></p>
</div>
<?php
}
$reponse->closeCursor();
?>
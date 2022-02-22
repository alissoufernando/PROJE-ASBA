
<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT * FROM photocouverture WHERE numero = ?');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>

<script>
 $('.couverture').css('background','url("photocouverture/<?php echo $donnees['nomphoto'];?>")');
  $('.couverture').css('background-size','100%');
  $('.couverture').css('background-repeat','no-repeat');
  $('.couverture').css('background-position','0px,-50px');
</script>
<?php
}
$reponse->closeCursor();
?>
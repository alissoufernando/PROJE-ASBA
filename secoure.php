
<?php include 'connect.php';?>

<?php $password = $_GET['motdepasse']; ?>

<?php
// mise à jour de la table publication photo
$req = $bdd->prepare('UPDATE inscription SET secoure = :passe WHERE numero = :num');
$req->execute(array(
'passe' => $password,
'num' => $_COOKIE['nom'] 
));
?>
<?php
header ('location:forum.php');
?>
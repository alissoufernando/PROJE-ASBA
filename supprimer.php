<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
include 'connect.php';
$reponse = $bdd->prepare('DELETE FROM publication WHERE id = ?');
$reponse->execute(array($_GET['idmessage']));
header ('location:profil.php');
?>
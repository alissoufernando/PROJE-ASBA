<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
 <?php
 $_SESSION['identifiantmessagepersonne'] = $_GET['id'];
  $_SESSION['nom_de_la_personne_envoyer'] = $_GET['nompersonne'];
  setcookie('identifiantmessagepersonne', $_GET['id'], time() + 365*24*3600,true);
  setcookie('nom_de_la_personne_envoyer', $_GET['nompersonne'], time() + 365*24*3600,true);
    header('Location:messageperso3.php');
 ?>
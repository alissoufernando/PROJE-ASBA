
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
$req = $bdd->prepare('SELECT id FROM amis WHERE nomamis = :nom AND nomdusecond = :nomduseconde');
$req->execute(array(
    'nom' => $_SESSION['pseudo']   ,
    'nomduseconde' =>  $_SESSION['nom']));

$resultats = $req->fetch();
if(!$resultats){
   header('location:verificationjustifi.php');
    
}else{
   
    header('location:messageperso3.php');
}
?>
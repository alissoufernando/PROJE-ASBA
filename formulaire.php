<?php session_start(); ?>
<html>
    <head>
        
    </head>
    <body>
       <?php
include("Connect.php");
$_SESSION['numero'] = $_POST['num'];
$numero = $_SESSION['numero'];
$_SESSION['pass'] = $_POST['motpasse'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['confirmpass'] = $_POST['confirmpass'];
$req = $bdd->prepare('SELECT id FROM inscription WHERE numero = :numero');
$req->execute(array(
    'numero' => $numero));
$resultat = $req->fetch();

if(!empty($resultat)){
  header('location:connexionerreur.php');  
}else{
   header('location:savemembre.php'); 
}
?>
    </body>
</html>


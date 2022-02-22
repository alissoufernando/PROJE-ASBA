<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
session_start();
?>
<html>
    <head>
     
    </head>
    <body>
       <?php
include("Connect.php");
$reponse = $_POST['reponse'];
$numero = $_COOKIE['nom'];
$idmessage = $_COOKIE['identifiantmessagepersonne'];
$nomenvoyeur = $_COOKIE['nom_de_la_personne_envoyer'];
$photoprofil = $_COOKIE['photoprofil'];
if (isset($reponse))
{
$bdd->exec("INSERT INTO messageprive (nomenvoyeur,message,pseudodestinataire,identifiantdumessage,photoprofil,heure,date) VALUES('$numero','$reponse','$numero','$idmessage','$photoprofil',NOW(),NOW());");
header ('location:messageperso3.php');
}
else
{
echo 'Il faut renseigner le message!';
}
?> 

    </body>
</html>


<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<html>
<head> <title> Envoyer </title>
</head>
</body>
<?php
include("Connect.php");
$titre=addslashes($_POST['titre']);
$auteur=addslashes($_POST['auteur']);
$message=addslashes($_POST['message']);
$photoprofil = $_COOKIE['photoprofil'];
$verification = "Livre";
$numero = $_COOKIE['nom'];
if (isset($titre)) 	
{
$bdd->exec("INSERT INTO publication (message,auteur,commentaire,verification,numero,photoprofil,datetime) VALUES
('$titre','$auteur','$message','$verification','$numero','$photoprofil',NOW());");	
header ('location:forum.php');	
}
else
{
header ('location:forum.php');
}
?>
</body>
</html>
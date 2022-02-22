<?php
session_start();
?>
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<html>
    <head>
     
    </head>
    <body>
       <?php
include("Connect.php");
$message = $_POST['message'];
$numero = $_COOKIE['nom'];
$photoprofil = $_COOKIE['photoprofil'];
if (!isset($message))
{
$bdd->exec("INSERT INTO publication (message,numero,photoprofil,datetime) VALUES('$message','$numero','$photoprofil',NOW());");	
header ('Location:forum.php');
}
else
{
echo 'Il faut renseigner le message!';
header ('Location:forum.php');
}
?> 

    </body>
</html>


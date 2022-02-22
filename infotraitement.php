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
$info = addslashes($_POST['info']);
$concernant = $_POST['concernant'];
$publieur = $_COOKIE['nom'];
if ($publieur == $publieur) //Si 
{
$bdd->exec("INSERT INTO infoslocal (interrese, nompublieur,information,heuredate) VALUES
('$concernant','$publieur','$info',NOW());" );
header('location:admin.php');
}
else //Sinon
{
echo "Votre demande ne peut aboutir! Vérifié vos données et réesayer!!";
header('location:admin.php');
}
?> 
    </body>
</html>


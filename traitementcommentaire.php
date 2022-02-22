
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
include("Connect.php");
$commentaire = addslashes($_POST['commentaire']);
$pp = $_COOKIE['photoprofil'];
$publieu = $_COOKIE['nom'];
$idpublication = $_COOKIE['publicationid'];
$vrai = "oui";
if ($publieu) //Si 
{
$bdd->exec("INSERT INTO commentaire (nomdupublieur, photodeprofil,commentaire,idcommentaire,vrai,dateheure) VALUES
('$publieu','$pp','$commentaire','$idpublication','$vrai',NOW());" );
header('location:forum.php');
}
else //Sinon
{
echo "Votre demande ne peut aboutir! Vérifié vos données et réesayer!!";
header('location:forum.php');
}
?> 
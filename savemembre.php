<?php session_start(); ?>
<?php
$photodefaut = "BenQ.jpg";
$vrai = "vrai";
$numero = $_SESSION['numero'];
$confirmpass = $_SESSION['confirmpass'];
$email = $_SESSION['email'];
if ($_SESSION['pass'] == $_SESSION['confirmpass'] ) //Si 
{
    include("Connect.php");
$bdd->exec("INSERT INTO inscription (numero, confirmpass,email,heure,date) VALUES
('$numero', MD5('$confirmpass'),'$email',NOW(), NOW());" );
$bdd->exec("INSERT INTO photoactu (nom_de_la_personne) VALUES ('$numero');");
$bdd->exec("INSERT INTO photocouverture (numero,nomphoto,vrai_ou_faux) VALUES ('$numero','$photodefaut','$vrai');");
header('location:continu.php');
setcookie('nom', $numero, time() + 365*24*3600,true);	
}
else //Sinon
{
echo "Votre demande ne peut aboutir! Vérifié vos données et réesayer!!";
header('location:connexionnnn.php');
}
?>


<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Page inscription</title>
        <meta charset="utf-8" />
        <!--[if lt IE 9]>;
<script
src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="newCascadeStyleSheet.css" />
<link rel="stylesheet" href="barredefilement.css" />
    </head>
    <body>
	<?php
	$name=addslashes($_FILES['monfichier']['name']);
	$vraifaux ="vrai";
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['monfichier']['size'] <= 1000000)
{
// Testons si l'extension est autorisée
$infosfichier = pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif',
'png');
if (in_array($extension_upload, $extensions_autorisees))
{
move_uploaded_file($_FILES['monfichier']['tmp_name'], 'photoprofil/'.
basename($_FILES['monfichier']['name']));
include('connect.php');
$toute = $_COOKIE['nom'];
setcookie('photoprofil', $name, time() + 365*24*3600,true);
$bdd->exec ("INSERT INTO profilphoto(vrai,nom_utilisateur,nomphoto,dateheure) VALUES ('$vraifaux','$toute','$name',NOW());");
header('location:forum.php');
}
}
}
?>

<?php
// mise à jour de la table publication photo
$req = $bdd->prepare('UPDATE publication SET photoprofil = :photo WHERE numero = :num');
$req->execute(array(
'photo' => $name,
'num' => $toute 
));
?>

<?php
// mise à jour de la table publication photo
$req = $bdd->prepare('UPDATE messageprive SET photoprofil = :photo WHERE 	pseudodestinataire = :num');
$req->execute(array(
'photo' => $name,
'num' => $toute 
));
?>


<?php
// mise à jour de la table publication photo
$req = $bdd->prepare('UPDATE photoactu SET 	photo_de_profil = :photo WHERE 	nom_de_la_personne = :num');
$req->execute(array(
'photo' => $name,
'num' => $toute 
));
?>

<?php
// mise à jour de la table publication photo
$req = $bdd->prepare('UPDATE commentaire SET photodeprofil = :photo WHERE 	nomdupublieur = :num');
$req->execute(array(
'photo' => $name,
'num' => $toute 
));
?>

<?php
//Connexion à la base de données
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// mise à jour de la table reponse
$req = $bdd->prepare('UPDATE repponses SET photodeprofil = :photo WHERE nomutilisateur = :num');
$req->execute(array(
'photo' => $name,
'num' => $toute 
));
?>



<?php
//Connexion à la base de données
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// mise à jour de la table reponse
$req = $bdd->prepare('UPDATE sujet SET photodeprofil = :photo WHERE nomutilisateur = :num');
$req->execute(array(
'photo' => $name,
'num' => $toute 
));
?>
</body>
</html>
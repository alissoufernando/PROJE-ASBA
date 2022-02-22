<?php
	$name=addslashes($_FILES['monfichier']['name']);
    $lien = addslashes($_POST['lien']);
    $titre = addslashes($_POST['titre']);
    $resume = addslashes($_POST['resume']);
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['monfichier']['size'] <= 10000000000000)
{
// Testons si l'extension est autorisée
$infosfichier = pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif',
'png');
if (in_array($extension_upload, $extensions_autorisees))
{
move_uploaded_file($_FILES['monfichier']['tmp_name'], 'actualite/'.
basename($_FILES['monfichier']['name']));
include('connect.php');
$bdd->exec ("INSERT INTO actualite(titre,lien,resume,nom_image,dateheure) VALUES ('$titre','$lien','$resume','$name',NOW());");
header('location:forum.php');
}
}
}
?>
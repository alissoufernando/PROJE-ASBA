
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
    </head>
    <body>
	<?php
	$name=addslashes($_FILES['monfichier']['name']);
	$imagepubliqe = addslashes($_POST['desciption']);
    $photoprofil = addslashes($_COOKIE['photoprofil']);

if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['monfichier']['size'] <= 10000000000)
{
// Testons si l'extension est autorisée
$infosfichier = pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif',
'png', 'exe', 'doc', 'mp4', 'mp3');
if (in_array($extension_upload, $extensions_autorisees))
{
move_uploaded_file($_FILES['monfichier']['tmp_name'], 'publication/'.
basename($_FILES['monfichier']['name']));
include('connect.php');
$nom = $_COOKIE['nom'];
$verifi = 'oui';
$bdd->exec ("INSERT INTO publication(message,datetime,numero,verification,commentaire,photoprofil) VALUES ('$name',NOW(),'$nom','$verifi','$imagepubliqe','$photoprofil');");
header('location:forum.php');
}
}
}
?>
</body>
</html>
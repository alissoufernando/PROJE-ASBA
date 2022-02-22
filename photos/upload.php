<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
		<link rel="shortcut icon" type="image/x-icon" href="Facebook.ico"/>
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
include("../connect.php");
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error']
== 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['monfichier']['size'] <= 1000000)
{
// Testons si l'extension est autorisée
$infosfichier =
pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png');
if (in_array($extension_upload, $extensions_autorisees))
{
// On peut valider le fichier et le stocker définitivement
move_uploaded_file($_FILES['monfichier']['name'], 'uploads/' .
basename($_FILES['monfichier']['name']));
echo "L'envoi a bien été effectué !";
}
}
}?>
 
 
</body>
</html>
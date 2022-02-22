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
move_uploaded_file($_FILES['monfichier']['tmp_name'], 'photocouverture/'.
basename($_FILES['monfichier']['name']));
include('connect.php');
$toute = $_COOKIE['nom'];
$req = $bdd->prepare('UPDATE photocouverture SET nomphoto = :photo,vrai_ou_faux = :vrai WHERE numero = :num');
$req->execute(array(
'vrai' => $vraifaux,	
'photo' => $name,
'num' => $toute)); 
}
}
}
?>
<?php
header('location:forum.php');
?>
</body>
</html>
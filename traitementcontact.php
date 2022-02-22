<?php include 'connect.php';
?>
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
$name=addslashes($_FILES['monfichier']['name']);
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['monfichier']['size'] <= 1000000000000000)
{
// Testons si l'extension est autorisée
$infosfichier = pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif',
'png');
if (in_array($extension_upload, $extensions_autorisees))
{
move_uploaded_file($_FILES['monfichier']['tmp_name'], 'lescontatcts/'.
basename($_FILES['monfichier']['name']));
}
}
}
$nom_personne = $_POST['nom'];
$rue_personne = $_POST['rue'];
$quartier_personne = $_POST['quartier'];
$ville_personne = $_POST['ville'];
$postal_personne = $_POST['postal'];
$etat_personne = $_POST['etat'];
$pays_personne = $_POST['pays'];
$tel_personne = $_POST['tel'];
$email_personne = $_POST['email'];
$nomutilisateur = $_COOKIE['nom'];
if ($nom_personne) //Si 
{
$bdd->exec("INSERT INTO Contact (nom_personne,contact_personne,email_personne,rue_personne,quartier_personne,vile_personne,
           poite_postal_personne,etat_personne,pays_personne,photo_personne,nom_enregistreur,heure,date) VALUES
('$nom_personne','$tel_personne','$email_personne','$rue_personne','$quartier_personne','$ville_personne','$postal_personne','$etat_personne',
'$pays_personne','$name','$nomutilisateur', NOW(),NOW());" );
header('location:contact.php');	
}
else //Sinon
{
echo 'Le contact n\'a pas pu être sauvegarder veillez vérifier votre connexion à internet et recommancer';
include ('contact.php');
}
?>
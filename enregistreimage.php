<?php
ini_set('mysql.connect_timeout',300);
ini_set('default.socket_timeout',300);
?>

<?php
if(isset($_POST['submit']))
{
    if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
    {
        echo "Veillez Selectionné une image.";
    }
    else
    {
        $image=addslashes($_FILES['image']['tmp_name']);
        $name=addslashes($_FILES['image']['name']);
        $image=file_get_contents($image);
        $image=base64_encode($image);
        saveimage($name,$image);
    }
}
        function saveimage($name,$image)
    {
include("Connexion.php");
 $bdd->exec("INSERT INTO photos (image,nom,heure_date) VALUES
('$image','$name', NOW());" );
 }
 

include("Connexion.php");
$reponse = $bdd->query('SELECT * FROM photos');
while ($donnees = $reponse->fetch())
echo $donnees['nom'];
echo '<img height="300" src="data:image;base64">'
?>








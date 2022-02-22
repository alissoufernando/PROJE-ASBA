<html>
    <head>
        
    </head>
    <body>
       <?php
include("Connect.php");
$numero = $_POST['contact'];
$nom = $_POST['nom'];
if (!$numero) //si
{
$bdd->exec("INSERT INTO contact (numero, nom,date) VALUES
('$numero','$nom',NOW());" );	
include("contact.php");
}
else //Sinon
{
echo "Votre contact n'a pas put être enregistré veillé réessayé plus tard";
include("contact.php");
}
?> 

    </body>
</html>


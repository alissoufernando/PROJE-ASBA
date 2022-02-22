<?php
//Dans une autre page :
session_start();
 ?>
 <?php
try
{   
 $bdd=new PDO('mysql:host=localhost;dbname=test','root','');
}
  catch(Exception $e)
    {          die('Erreur : '.$e->getMessage());
    }
$req = $bdd->prepare('SELECT TITRE FROM news WHERE id=id=?');
$id = $_POST['id'] ;
$_SESSION['id_user'] = $id;
var_dump($_POST);
$req->execute(array($_SESSION['id_user']));
$donnees = $req->fetch();
//Ensuite tu peux afficher l'image comme ceci
?>
<img src="C:/<?php echo $donnees['TITRE']; ?>"/>
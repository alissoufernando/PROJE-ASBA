<?php
 extract($_POST);
 if(isset ($pseudo) && !empty($pseudo)){
 include "connect.php";
 $bdd->exec ("INSERT INTO commentaire(pseudo,com) VALUES ('$pseudo','$com');");
 echo "Ok";
 }
 else{
	 echo "Le champ Pseudo est vide";
 }
?>
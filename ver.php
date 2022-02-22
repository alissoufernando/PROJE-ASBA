<?php
include('connect.php');
$verifi = 'oui';
if($donnees['verification'] == $verifi){
echo $donnees['commentaire'];
include ('ima.php');
}else{
	echo $donnees['message'];
}
?>


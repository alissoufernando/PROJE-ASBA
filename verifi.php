<?php
if(empty($_COOKIE['nom'])){
header('location:inscription.php');
}
else{
 header('location:forum.php');   
}

?>
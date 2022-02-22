<?php
include("Connect.php");;
$message = $_POST['message'];
$cookie = $_COOKIE['nom'];

$bdd->exec("INSERT INTO messagep (message,cookie,heure,date) VALUES
('$message','$cookie',NOW(), NOW());" );


?>
<?php 
session_start();
$_SESSION['identifiant'];
?>
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
<title>Répondre</title>
<link rel="stylesheet" href="new22.css">
<link rel="stylesheet" href="indexcss.css">
<link rel="stylesheet" href="barredefilement.css" />
<meta charset="UTF-8" />
</head>
<body>
<form action="envoidereponse.php" method="POST">
<center><div class="granddiv">
<input type="text" placeholder="Saisissez la réponse" name="reponse"><br>
<button class="button1">Soumettre</button></center>
</div>
</form>
</body>
</html>
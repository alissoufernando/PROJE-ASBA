
<?php 
include("connect.php");
?>

<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="tonimageici.jpg" />
<link rel="stylesheet" href="discution.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
<title> <?php echo $_COOKIE['nom'] ?>-EnLigne </title>
<script type="text/javascript" src="jquery.js"></script>
<section>
		<div class="principal">
		<div class="secondaire">
		<h3>Discution instantanné...</h3>
		</div>
		<div align="center">
		<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT nom FROM photos WHERE
nomutilisateur = ?');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<img src="uploads/<?php echo $donnees['nom'];?>"  style="border-radius:50px;" width="15%">
<?php
}
$reponse->closeCursor();
?>
		</div>
		<?php
$reponse = $bdd->query('SELECT numero,date FROM inscription');
while ($donnees = $reponse->fetch())
{
?>
	<strong> <?php echo $donnees['numero'];?>  <span><img src="close.png"></span><br></strong>
<?php
}
$reponse->closeCursor();
?>
		</div>	<br>	
		</section>
</body>
</html>
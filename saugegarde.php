
	<html>
		<head>
			<link rel="stylesheet" href="new22.css">
			<link rel="stylesheet" type="text/css" href="css/animate.css">
		</head>
		<body>
		   <?php
		   usleep(100);
	include("Connect.php");
	$numero = $_POST['contact'];
	$nom = $_POST['nom'];
	if ($nom) //si
	{
	$bdd->exec("INSERT INTO contact (numero, nom,date) VALUES
	('$numero','$nom',NOW());" );	
	require 'contact.php';
	}
	else //Sinon
	{
	echo "Votre contact n'a pas put être enregistré veillé réessayé plus tard";
	require 'contact.php';
	}
	usleep(100);
	?> 

	<?php
	include("Connect.php");
	$reponse = $bdd->query('SELECT numero,nom,id,date FROM contact');
	while ($donnees = $reponse->fetch())
	{
	?>
	<center>
	<table class="animated wow pulse">
	<thead>
	<tr>
	<th colspan="4">Sauvegarder le: <?php echo $donnees['date'];?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<th>Id </th>
	<th>Nom</th>
	<th>Contact</th>
	<th>Supprimé</th>
	</tr>
	<tr>
	<td><div id="message"><?php echo $donnees['id'];?></div></td>
	<td><div><strong><?php echo $donnees['numero'];?></strong></div></td>
	<td><div><strong><?php echo $donnees['nom'];?></strong></div></td>
	<td><div><strong><img src="fleche.png"></strong></div></td>
	</tr>
	</tbody>
	</table>
	</center>
	<?php
	}
	$reponse->closeCursor();
	?>
	<?php
	include("Connect.php");
	$reponse = $bdd->query('SELECT nomphoto FROM photos WHERE
	nomutilisateur=\'tako michael\'');
	$donnees =($reponse);
	echo $donnees ;
	?>
	<img src="photos/photosprofils/$donnees">
		</body>
	</html>


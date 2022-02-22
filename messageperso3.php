<?php include 'connect.php';
session_start();
?>
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link rel="stylesheet" href="styleforum.css">
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" href="messageprive.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<script src="modernizr.custom.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<title><?php echo $_COOKIE['nom'];?>-Forum </title>
<style>
	textarea{
		width: 500px;
	}
	#sectiongauche{
	float:left;width:350px;
	
	}
	@media screen and (max-width: 1300px)
{
	#sectiongauche{
	width:300px;	
	}
	#p1{
		display: none;
	}
	}
	
	@media screen and (max-width: 1200px)
{
	#sectiongauche{
	width:250px;	
	}
	}
	
	@media screen and (max-width: 1130px)
{
	#sectiongauche,#profil{
	display: none;
	}
	.profil{
		margin-right:-20px;
	}
	
	}
	
	@media screen and (max-width: 400px)
{
	textarea{
		width: 250px;
	}
	}
	#pgene{
			font-family:Amperzand;
			font-size:45px;
			color:#fff;
			float:left;
			margin-top:-9px;
			
		}
</style>
</head>
<body>

<header class="" id="header">
		<div align="center"  id="titre">
<p id="pgene">Pee-Com</p>             
		<a href="forum.php"><i class="fa fa-home menu" title="Acceuil"> Acceuil </i></a>
		<a href="messageperso3.php"><i class="fa fa-inbox menu" title="Message"> Message </i></a>
		<a href="profil.php"><i class="fa fa-user menu" title="Profil"> Profil </i></a>
		<a href="deconcettempo.php"><i class="fa fa-exclamation menu" title="Déconnection temporaire">Fermer la section</i></a>
		<a href="deconnetion.php"><i class="fa fa-power-off menu" title="Déconnection"> Deconnection </i></a>
		<a href="redemarr.php"><i class="fa fa-unlock-alt menu" title="Redemarré"> Redémarrer</i></a>
		</div>
      
      <div align="center"  id="titre2">           
		<a href="forum.php"><i class="fa fa-home menu" title="Acceuil"></i></a>
		<a href="messageperso3.php"><i class="fa fa-inbox menu" title="Message"></i></a>
		<a href="profil.php"><i class="fa fa-user menu" title="Profil"></i></a>
		<a href="deconcettempo.php"><i class="fa fa-exclamation menu" title="Déconnection temporaire"></i></a>
		<a href="deconnetion.php"><i class="fa fa-power-off menu" title="Déconnection"> </i></a>
		<a href="redemarr.php"><i class="fa fa-unlock-alt menu" title="Redemarré"></i></a>
		</div>
		</header>
<div class="profil" id="profil"> 
<i class="fa fa-inbox"> Message Privé </i>
</div>
<section id="sectiongauche">
<button class="genera" href="#infos" class="list-group-item i" data-toggle="modal"> <i class="fa fa-pencil g"> </i> Nouveau message</button><br>
</a>
<div class="modal fade" id="infos" role="dialog" arialabelledby="modalTitre" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"
aria-hidden="true">x</button>
<h4 id="modalTitre" class="modal-title">Ecrivez en Privé à vos amis et soyez en contact</h4>
</div>
<div class="modal-body">
        
        <form action="envoidemessageprive.php" method="post">
<input type="text" placeholder="Pseudo" required="required" class="input1" name="pseudodestinataire"><br><br>
<textarea class="textarea" name="messageaenvoyer">Saisissez votre message ici</textarea><br><br>
<button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<hr>
<small class="pull-right">Messages Privés</small>
</div>
</div>
</div>
</div>

<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT * FROM amis WHERE nomamis= ? ORDER BY date DESC');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<a style="text-decoration:none;" href="creation_de_cookie.php?id=<?php echo $donnees['idsecondaire'];?>&nompersonne=<?php echo $donnees['nomdusecond'];?>"><div style="margin: 5px;background: silver;height: 60px;border-radius:9px;">
<img src="photoprofil/<?php echo $donnees['photoprofil'];?>" width="50px" height="50px" style="border-radius:80px;border:4px solid #fff;float: left;margin-left: 10px;margin-top: 5px;">
<p style="font-weight: bold;font-family: forte;font-size: 17px;"><?php echo $donnees['nomdusecond'];?></p>
<p id="p1"> <?php echo $_COOKIE['nom'];  ?></p></a>
</div>
<?php
}
$reponse->closeCursor();
?>
</section>

<!--section droite c'est pour dire le menu-->
<article style="width:250px;margin-right: 15px;" class="droite">
     <div class="profil"> 
<i class="fa fa-list-ul"> Menu</i>
</div>
     <div class="divmenu">
 <br>
</div>
     <br>
<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Général</div></center>
<a href="forum1.php"><button class="general"> <i class="fa fa-arrow-right g">  </i>Forum</button></a><br>
<a href="contact.php"><button class="general"> <i class="fa fa-phone g">  </i>Sauver un contact</button></a><br>
<a href="contact.php"><button class="general"> <i class="fa fa-globe g">  </i>Gérer vos Contact</button></a><br>
<a href="sujet.html"><button class="general"> <i class="fa fa-pencil g"> </i> Créer un sujet</button></a><br>

<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Etudes</div></center>
<br>

<a href="openclassroom.com"><button class="general"> <i class="fa fa-book g">  </i>Informatique</button></a><br>
<a href="electronique.com"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Electronique</button></a><br>
<a href="#"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Mécanique</button></a><br>
<a href="#"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Autre ++</button></a><br>


<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Publier</div></center>

<br>

<a href="openclassroom.com"><button class="general"> <i class="fa fa-photo g">  </i>Image</button></a><br>
<a href="electronique.com"><button class="general"> <i class="fa fa-bell g">  </i>Information</button></a><br>
<a href="#"><button class="general"> <i class="fa fa-book g">  </i>Livre</button></a><br>
<a href="#"><button class="general"> <i class="fa fa-plus g">  </i>Autres</button></a><br>

<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Groupes</div></center>


</article>
<!--Finde la section de la droite --> 
<div align="center" class="cadre1"> 
<div class="cadre2" ><h2>Message Privé</br>
</div>
<div id="partit">
<div id="ttparticulier" style="height: 420px;border:1px solid silver;border-radius: 7px;overflow: auto;">

<?php
include ('connect.php');

$req = $bdd->prepare('SELECT id FROM amis1 WHERE nomenvoyeur = :numero');
$req->execute(array(
    'numero' =>$_COOKIE['nom']));
$resultat = $req->fetch();
if (!empty($resultat)){
        include 'viewsms.php';
}else{
        include 'nosms.html';
}?>

</div>
</div>
</div>
<form action="messageprive2.php" method="post" style="margin-top: 20px;" id="answers">
        <textarea name="reponse" id="reponse"></textarea>
        <button type="submit" class="btn btn-primary">Envoyer</button></form>
</body>

<script>
function charger(){
setTimeout( function(){
   $("#partit").load("messageperso3.php #ttparticulier"); 
charger(); // on relance la fonction
}, 5000); // on exécute le chargement toutes les 5 secondes
} charger();
</script>


</html>
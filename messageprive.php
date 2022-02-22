<?php include 'connect.php';
?>
<html>
<head>
<meta charset="utf-8">
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

</head>
<body>

<header class="animated wow fadeInLeft" id="header">
		<div align="center"  style="font-size: 25px;">
<img src="ffed635e-fd1d-4fe8-9130-a17c6e36ea4a.png" width="100px" style="float: left;margin-left: 60px;margin-top: -33px;">            
		<a href="index.php"><i class="fa fa-home menu" title="Acceuil"> Acceuil </i></a>
		<a href="messageprive.php"><i class="fa fa-inbox menu" title="Message"> Message </i></a>
		<a href="profil.php"><i class="fa fa-user menu" title="Profil"> Profil </i></a>
		<a href="deconcettempo.php"><i class="fa fa-exclamation menu" title="Déconnection temporaire">Fermer la section</i></a>
		<a href="deconnetion.php"><i class="fa fa-power-off menu" title="Déconnection"> Deconnection </i></a>
		<a href="redemarr.php"><i class="fa fa-unlock-alt menu" title="Redemarré"> Redémarrer</i></a>
		</div>
		</header>
<div class="profil"> 
<i class="fa fa-inbox"> Instance <span class="badge">120</span></i>
</div>
<section style="float:left;width:350px;">
<button class="genera" href="#infos" class="list-group-item" data-toggle="modal"> <i class="fa fa-pencil g"> </i> Nouveau message</button><br>

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
<a href="creation_de_cookie.php?id=<?php echo $donnees['idsecondaire'];?>&nompersonne=<?php echo $donnees['nomdusecond'];?>"><div style="margin: 5px;background: silver;height: 60px;border-radius:9px;">
<img src="photoprofil/<?php echo $donnees['photoprofil'];?>" width="50px" height="50px" style="border-radius:80px;border:4px solid #fff;float: left;margin-left: 10px;margin-top: 5px;">
<p style="font-weight: bold;font-family: forte;font-size: 17px;"><?php echo $donnees['nomdusecond'];?></p>
<p>Voici le joli nouveau message je ne...</p></a>
</div>
<?php
}
$reponse->closeCursor();
?>
</section>

<!--section droite c'est pour dire le menu-->
<article style="width:250px;margin-right: 15px;" class="droite">
     <div class="profil"> 
<i class="fa fa-list-ul"> Menu Principal </i>
</div>
     <div class="divmenu">
 <br>
</div>
     <br>
<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Général</div></center>
<a href="forum1.php"><button class="general"> <i class="fa fa-arrow-right g">  </i>Forum</button></a><br>
<button class="general"> <i class="fa fa-plus g">  </i>Inviter un amis</button><br>
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
<div class="cadre2" ><h2>Publication</br>
</div>


<article id="particulier">
<p>NOM DU MEMBRE: <?php echo $_COOKIE['nom'];?> </p>
</article>
</body>
</html>
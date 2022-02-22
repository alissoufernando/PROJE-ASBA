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
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link rel="stylesheet" href="styleforum.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="barredefilement.css" />
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<script src="modernizr.custom.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<title>Forum-LT-Messenger</title>

</head>
<body>

<header class="" id="header">
		<div align="center"  style="font-size: 25px;">
<img src="ffed635e-fd1d-4fe8-9130-a17c6e36ea4a.png" width="100px" style="float: left;margin-left: 60px;margin-top: -33px;">            
		<a href="forum.php"><i class="fa fa-home menu" title="Acceuil"> Acceuil </i></a>
		<a href="messageperso3.php"><i class="fa fa-inbox menu" title="Message"> Message </i></a>
		<a href="profil.php"><i class="fa fa-user menu" title="Profil"> Profil </i></a>
		<a href="deconcettempo.php"><i class="fa fa-exclamation menu" title="Déconnection temporaire">Fermer la section</i></a>
		<a href="deconnetion.php"><i class="fa fa-power-off menu" title="Déconnection"> Deconnection </i></a>
		<a href="redemarr.php"><i class="fa fa-unlock-alt menu" title="Redemarré"> Redémarrer</i></a>
		</div>
		</header>

<!--section droite c'est pour dire le menu-->
<article style="width:250px;margin-right: 15px;" class="droite">
     <div class="profil"> 
<i class="fa fa-list-ul"> Menu Principal </i>
</div>
     <div class="divmenu">
 <br>
</div>
     <br>
     <div>
<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Général</div></center>
<a href="connexionnnn.php"><button class="general"> <i class="fa fa-arrow-right g">  </i>Créer un compte</button></a><br>
<button class="general"> <i class="fa fa-plus g">  </i>Se connecter</button><br>
<a href="#"><button class="general " data-toggle="modal" href="#infos"> <i class="fa fa-pencil g"> </i> Créer un sujet</button></a><br>
     </div>
<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Etudes</div></center>
<br>

<a href="openclassroom.com"><button class="general"> <i class="fa fa-book g">  </i>Informatique</button></a><br>
<a href="electronique.com"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Electronique</button></a><br>
<a href="#"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Mécanique</button></a><br>
<a href="#"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Autre ++</button></a><br>

 <center><button data-toggle="modal" href="#infos" class="btn btn-info">Informations</button></center>
<div class="modal" id="infos">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" datadismiss="modal">x</button>
<h4 class="modal-title">Plus d'informations</h4>
</div>
<div class="modal-body">
Pour accéder à toutes les options disponibles sur LTmessenger il faut créer un compte ou soit vous connecter si vous avez déjà un compte afin de
profiter de tout les sujets et profiter également au maximun des options que le site met à votres disposition. Je vous pris de vous identifier ici
avant de continuer et de participer à nos divers options. Merci de votre attention que vous nous avez porter.
</div>
<div class="modal-footer">
<button class="btn btn-info" data-dismiss="modal">Fermer</button>
</div>
</div>
</div>
</div>

</article>
<!--Finde la section de la droite -->
<div align="center" class="cadre12" style="margin-left: 0px;"> 
<div class="cadre22" style="margin-left: 16px;"><h2>Forum Général (FG)</br>
</div>

<div id="ttparticulier">
<?php
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM sujet ORDER BY id DESC LIMIT 0,1');
while ($donnees = $reponse->fetch())
{
?>
<div class="messag"><div id="numer"><div class="sujet"><h1><?php echo $donnees['sujer'];?> </h1>Par:<br> <?php echo $donnees['nomutilisateur'];?>
 le: <?php echo $donnees['date'];?> à:<?php echo $donnees['heure'];?><br>
<img src="photoprofil/<?php echo $donnees['photodeprofil'] ;

?>"
width="70px" height="70px" style="border-radius:50px;border:4px solid #fff;"></div>
<?php
$_SESSION['identifiant'] = $donnees['id'];
?>
<button class="general" href="#infos"> <i class="fa fa-answers g" data-toggle="modal">  </i>Les réponses</button><br>
</div>
<?php
}
$reponse->closeCursor();
?>
</div>
<div>
<?php
$reponse = $bdd->prepare('SELECT * FROM repponses WHERE iddumessage = ? ORDER BY id DESC');
$reponse->execute(array($_SESSION['identifiant']));
while ($donnees = $reponse->fetch())
{
?>
        <div class="divdereponde"><div style="float: right;margin-right: 20px;text-align: justify;width:800px;font-family: Century Schoolbook;font-size: 17;" class="messa"><?php echo $donnees['reponse'];?></div>
    
		<div style="float: left; margin-left: 5px;position: absolute;font-family: Bradley Hand ITC;font-weight: bold;font-size: 18px;">
<a href="photoprofil/<?php echo $donnees['photodeprofil'];?>"><img src="photoprofil/<?php echo $donnees['photodeprofil'];?>"
width="80px" height="80px" style="border-radius:50px;border:4px solid #fff;"></a><br>
                
                <i class="fa fa-clock-o i"> </i> <?php echo $donnees['heure'];?><br> 

		<i class="fa fa-calendar i"> </i> <?php echo $donnees['date'];?><br>

		<i class="fa fa-user i"> </i> <?php echo $donnees['nomutilisateur'];?><br>
                
                </div></div>
<?php
}
$reponse->closeCursor();
?>
</div>

</body>
</html>
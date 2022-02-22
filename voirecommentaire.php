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
<link rel="stylesheet" href="barredefilement.css" />
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
        #aimer{
                width: 100px;
                transition: 0.2s;
        }
         #aimer:active{
                color: blue;
                text-decoration:none;
                
        }
        body{
            font-family: forte;
        }
</style>
</head>
<body>

<header class="" id="header">
		<div align="center"  style="font-size: 25px;">
<img src="ffed635e-fd1d-4fe8-9130-a17c6e36ea4a.png" width="100px" style="float: left;margin-left: 60px;margin-top: -33px;">            
		<a href="index.php"><i class="fa fa-home menu" title="Acceuil"> Acceuil </i></a>
		<a href="messageperso3.php"><i class="fa fa-inbox menu" title="Message"> Message </i></a>
		<a href="profil.php"><i class="fa fa-user menu" title="Profil"> Profil </i></a>
		<a href="deconcettempo.php"><i class="fa fa-exclamation menu" title="Déconnection temporaire">Fermer la section</i></a>
		<a href="deconnetion.php"><i class="fa fa-power-off menu" title="Déconnection"> Deconnection </i></a>
		<a href="redemarr.php"><i class="fa fa-unlock-alt menu" title="Redemarré"> Redémarrer</i></a>
		</div>
		</header>
<div class="profil"> 
<i class="fa fa-inbox"> Profil</i>
</div>
<section style="float:left;width:350px;margin-left:0px;">
     <div class="couverture">
      <?php
include ('connect.php');
$req = $bdd->prepare('SELECT nomphoto FROM photocouverture WHERE numero = :numero');
$req->execute(array(
    'numero' => $_COOKIE['nom']));
$resultat = $req->fetch();
if (!$resultat){
include 'couver.php';
}else{
    include 'couvertureaffichage.php';
}
?>
 <br><?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT nomphoto FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC LIMIT 0,1');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<a href="photoprofil/<?php echo $donnees['nomphoto'];?>"><img src="photoprofil/<?php echo $donnees['nomphoto'];?>" width="110px" height="110px" style="border-radius:80px;border:4px solid #fff;" class="animated wow fadeInDown"></a>
<?php
}
$reponse->closeCursor();
?>
  </div>
<div>
   <?php
$reponse = $bdd->prepare('SELECT * FROM inscription WHERE numero = ?');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
    <div id="tout">
        <i class="fa fa-user i" title="Votre email"></i><?php echo $donnees['numero'];?>
    </div>
	 <div id="tout">
		<i class="fa fa-clock-o i" title="Votre prenom d'utilisateur"></i><?php echo $donnees['heure'];?>
	 </div>
	 <div id="tout">
		<i class="fa fa-calendar i" title="Votre age"></i><?php echo $donnees['date'];?>
	 </div>
	 <div id="tout">
		<i class="fa fa-phone i" title="Votre date d'inscription"></i><?php echo $donnees['id'];?>
	 </div>
<?php
}
$reponse->closeCursor();
?>
<a href="forum.php"><button type="button" class="btn btn-success" style="font-size: 18px;font-family: forte;"> <i class="fa fa-arrow-left"> </i> Acceuil</button></a>
</section>
<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT * FROM publication WHERE id = ?');
$reponse->execute(array($_GET['idpublithelapublicationofday']));
while ($donnees = $reponse->fetch())
{
?>
<div style="border:1px double silver;padding: 5px;width: 660px;float: right;margin-right: 100px;height: 800px;overflow: auto;">
<a href="publication/<?php echo $donnees['message'];?>"><img src="publication/<?php echo $donnees['message'];?>" width="650px" height="auto" style="border:4px solid silver;border-radius:8px;position: relative;"></a>
<center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;width: 120px;
    height: 30px;
    background: #1e73be;
    margin-top: 10px;">Commentaires</div>
<?php
}
$reponse->closeCursor();
?>
</center>
<?php
$reponse = $bdd->prepare('SELECT * FROM commentaire WHERE idcommentaire = ?');
$reponse->execute(array($_GET['idpublithelapublicationofday']));
while ($donnees = $reponse->fetch())
{
?>
<?php if ($donnees['vrai'] == "oui"){
include 'toutee.php';
    }elseif($donnees['vrai'] != "oui"){
          include 'nocomment.php';  
        } ?>
<?php
}
$reponse->closeCursor();
?>
</div>

</body>
</html>
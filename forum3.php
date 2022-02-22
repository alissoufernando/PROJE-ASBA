<?php include 'connect.php';
session_start();
?>
<?php
$_SESSION['identifiant'] = $_GET['id'];
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
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" href="styleforum.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<title><?php echo $_COOKIE['nom'];?>-Forum </title>
<style>
.cadre2{
	width:100%;
}
.messa{

}
	@media screen and (max-width: 1300px){
	#section{
		display: none;
		}
		.cadre11,.cadre2{
			margin-left: 0px;
			width: 9,00px;
		}
	}

	@media screen and (max-width: 1200px){
	#section,#pro{
		display: none;
		}
		.cadre11,.cadre2{
			margin-left: 0px;
			width: 800px;
		}
	}

	@media screen and (max-width: 1100px){
	#section,#pro{
		display: none;
		}
		.cadre11,.cadre2{
			margin-left: 0px;
			width: 700px;
		}
	}

	@media screen and (max-width: 1000px){
	#section,#pro{
		display: none;
		}
		.cadre11,.cadre2{
			margin-left: 0px;
			width: 600px;
		}
	}
	@media screen and (max-width: 900px){
	#section,#pro{
		display: none;
		}
		.cadre11,.cadre2{
			margin-left: 0px;
			width: 500px;
		}
	}
	@media screen and (max-width: 800px){
	#section,#pro{
		display: none;
		}
		.cadre11,.cadre2{
			margin-left: 0px;
			width: 450px;
		}
	}

	@media screen and (max-width: 760px){
	#section,#pro{
		display: none;
		}
		.cadre11,.cadre2{
			margin-left: 0px;
			width: auto;
			margin-right: 10px;
		}

		.messag,.divresponse{
			margin-right: 23px;
		}
	}
	body{
	background:#ededed;
}
#pgene{
			font-family:Amperzand;
			font-size:45px;
			color:#fff;
			float:left;
			margin-top:-9px;
		}
    .general{
			border-radius:7px;
		}
		#header a{
	color:#fff;
}
</style>
</head>
<body>

<header id="header">
		<div   id="titre">
		<?php include 'monmenu.php'; ?>
		</div>

      <div   id="titre2">
		<i class="pe-7s-menu menu">  </i>
		</div>
		</header>

<!--Finde la section de la droite -->
<center>
<div align="center" class="cadre11">
<div class="cadre222"><h2>Forum (FG)</br>
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

$reponse = $bdd->prepare('SELECT * FROM sujet WHERE id= ? ORDER BY id DESC');
$reponse->execute(array($_SESSION['identifiant']));
while ($donnees = $reponse->fetch())
{
?>
<div class="messag"><div id="numer"><div class="sujet" style="background-image:url('black-and-white-man-person-hands.jpg');"><h1><?php echo $donnees['sujer'];?> </h1><p style="color:#fff;background:rgba(10,15,10,0.8);padding:10px;width:500px;">Par:<br> <?php echo $donnees['nomutilisateur'];?>
 le: <?php echo $donnees['date'];?> à:<?php echo $donnees['heure'];?><br></p>
<a href="photoprofil/<?php echo $donnees['photodeprofil'];?>"><img src="photoprofil/<?php echo $donnees['photodeprofil'];?>"
width="70px" height="70px" style="border-radius:50px;border:4px solid #fff;"></a></div>
<a href="reponses.php"><button class="general"> <i class="fa fa-plus g">  </i>Répondre à ce sujet</button></a><br>
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
        <div class="divdereponde"><div style="float: right;margin-right: 20px;text-align: justify;width:;font-family: Century Schoolbook;font-size: 17px;" class="messa"><?php echo $donnees['reponse'];?></div>

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
</div>
</div>
</center>

</body>
</html>

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
<meta name="viewport" content="width=device-width"/>
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<link rel="stylesheet" href="styleforum.css">
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<script src="modernizr.custom.js"></script>
<script src="js/jquery.js"></script>

<title><?php echo $_COOKIE['nom'];?>-Forum </title>
<style>
#header a{
	color:#fff;
	font-size:20px;
}
.cadre2{
	width:100%;
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
</style>
</head>
<body>

<header class="" id="header">
		<?php include 'monmenu.php'; ?>
		</header>


<!--Finde la section de la droite -->
<center><div align="center" class="cadre11">
<div class="cadre222"><h2> Forum (FG)</br></div>


<div id="ttparticulier">
<?php
include 'connect2.php';
$reponse = $bdd->query('SELECT * FROM sujet ORDER BY id DESC LIMIT 0,1');
while ($donnees = $reponse->fetch())
{
?>
<div ><div ><div class="sujet" style="background-image:url('black-and-white-man-person-hands.jpg');"><h1><?php echo $donnees['sujer'];?> </h1><p style="color:#fff;background:rgba(10,15,10,0.8);padding:10px;width:500px;">Par:<br> <?php echo $donnees['nomutilisateur'];?>
 le: <?php echo $donnees['date'];?> à:<?php echo $donnees['heure'];?><br></p>
<a href="photoprofil/<?php echo $donnees['photodeprofil'];?>"><img src="photoprofil/<?php echo $donnees['photodeprofil'];?>"
width="70px" height="70px" style="border-radius:50px;border:4px solid #fff;"></a></div>
<?php
$_SESSION['identifiant'] = $donnees['id'];
?>
<center><a href="reponse.php"><button class="generall"> <i class="fa fa-plus g">  </i>Répondre à ce sujet</button></a></center><br>
</div>
<?php
}
$reponse->closeCursor();
?>
</div>
<div class="divresponse">
<?php
$reponse = $bdd->prepare('SELECT * FROM repponses WHERE iddumessage = ? ORDER BY id DESC');
$reponse->execute(array($_SESSION['identifiant']));
while ($donnees = $reponse->fetch())
{
?>
        <div class="divdereponde"><div style="float: right;margin-right: 20px;text-align: justify;font-family: Century Schoolbook;font-size: 17px;" class="messa"><?php echo $donnees['reponse'];?></div>

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
</div></center>

</body>
</html>

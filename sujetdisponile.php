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

</head>
<body>

<div id="tparticuliert">
    <div class="secondairedetoumessujets">
<?php
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM sujet');
while ($donnees = $reponse->fetch())
{
?>
<div class="messag"><div id="nume"><a href="photoprofil/<?php echo $donnees['photodeprofil'];?>"><img src="photoprofil/<?php echo $donnees['photodeprofil'];?>"
width="50px" height="50px" style="border-radius:50px;border:2px solid #fff;margin-left: 90px;"></a>
<?php $donne = $donnees['id'];?>
<a href="forum3.php?id=<?php echo $donne;?>"><button type="submit" class="btn btn-success" style="float: right;margin: 15px;">Intervenir</button></a>
<div class=""><h3><?php echo $donnees['sujer'];?> </h3>Par: <?php echo $donnees['nomutilisateur'];?>
 le: <?php echo $donnees['date'];?> à:<?php echo $donnees['heure'];?><br><br>

</div>
</div>
<?php
}
$reponse->closeCursor();
?>
</div>
</div>

</body>
</html>
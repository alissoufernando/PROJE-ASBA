
<html>
<head

<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" href="messageprive.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="jquery.js"></script>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<title> Vérification </title>
<style>
  .special{
    width: 400px;
    height: 260px;
    border-radius:8px;
    background: url('glasses-415257_960_720.jpg');
    background-size: 100%;
  }
  .p1{
    font-size: 20px;
    font-family: forte;
  }
</style>
</head>
<body>
    <center><br><br><br>
<div class="special">
     <br><br>
     <?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT nomphoto FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC LIMIT 0,1');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<img src="photoprofil/<?php echo $donnees['nomphoto'];?>" width="100px" height="100px" style="border-radius:80px;border:4px dotted #fff;"><br>
<?php
}
$reponse->closeCursor();
?>
<p class="p1">Votre Pseudo est bien le: <?php echo $_COOKIE['nom'] ?></p><br>
<a href="motdepasseoublier.php"><button type="submit" class="btn btn-warning" style="float: left;margin-left: 10px;">Annuler</button></a>
<a href="forum.php"><button type="submit" class="btn btn-success" style="float: right;margin-right: 10px;">Continuer</button></a>
</div>

</center>
</body>
</html>
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width"/>
        <title>Page inscription</title>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="styleforum.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <script src="jquery.js"></script>
        <meta charset="utf-8" />
        <!--[if lt IE 9]>;
<script
src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
*{
	margin:0px;
}
.div20{
	width:100%;
	height:250px;
	background-image:url('img/slide2.jpg');
    background-size: 100%;
}
.div{
	display:inline-block;
	margin:10px;
	margin-left:50px;
	margin-right:50px;
	font-family:Adobe Hebrew;
	font-size:20px;
}
article{
	background:rgba(247 ,240, 172, 0.6);
}
mark{
	font-size:12px;
}
#numero{
	width: 550px;
}
#complete, #annuler{
	border:3px solid  #000;
	width:200px;
	height:50px;
	font-size:16px;
	font-family:Comic Sans MS;
	opacity:0.7;
}
#complete:hover{
	transition:2s;
	border:3px solid red;
	opacity:1;
}#annuler:hover{
	transition:2s;
	border:3px solid red;
	opacity:1;
}
#monimage5{
	width: 555px;
	margin-left: -7px;
}
#div1{
display:inline-block;
margin:10px;	
}
footer{
	font-family:Comic Sans MS;
	font-size:18px;
	background:rgba(247 ,240, 172, 0.7);
	margin-top:20px;
}
.tof{
    width: 500px;
    height: auto;
    border:2px solid silver;
    margin: 20px;
    float: right;
    padding: 9px;
    border-radius:10px;
}
#maitre{
	width: 600px;
}
.profils{
    width: 500px;
    float: right;
}
.deplace{
    
    width: 150px;
    margin-left: -700px;
}
#maphoto{
	height: 180px;
	width: 180px;
}
#couve{
   padding: 13px;
   margin-right: -70px;
   background: #3b9cbf;
   border:5px dashed #3b9cbf;
   border-radius:100px;
   cursor:pointer;
}
input[type="file"]{
   visibility: hidden;
}
#form{
   float: right;
}

@media screen and (max-width: 1160px){
.profils{
	display: none;
}
.ttparticulier1{
	float: none;
	width: 100%;
}
#maphoto{
	height: 100px;
	width: 100px;
}
#numero{
	width: auto;
}

#maitre{
	width: 100%;
}
.deplace{
    
    width: 150px;
    margin-left: 0px;
}
#datetime{
	text-align: center;
}
.div20{
	height:180px;
    background-size: 150%;
}
.monimage{
	width: 100%;
}
}
</style>
    </head>
    <body>
<div class="div20">
<div class="div21" >
<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT nomphoto FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC LIMIT 0,1');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<center><a href="photoprofil/<?php echo $donnees['nomphoto'];?>" class="animated wow fadeInDown"><img src="photoprofil/<?php echo $donnees['nomphoto'];?>" id="maphoto" style="border-radius:100px;border: 3px solid #fff;padding: 3px;margin-top: 27px;"></a></center>
<?php
}
$reponse->closeCursor();
?>
</div>

</div>
<article>
<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT * FROM inscription WHERE numero = ?');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<div class="div"> Compte créer le:<br> <?php echo $donnees['date'];?> </div> <div class="div"> Propriétaire:<br><?php echo $donnees['numero'];?> </div><div class="div">Membre N°:<br><?php echo $donnees['id'];?> </div>
<?php
}
$reponse->closeCursor();
?>
</article>

<div class="profils">
    
<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT nomphoto,dateheure FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<div class="animated wow fadeInDown tof">
<a href="photoprofil/<?php echo $donnees['nomphoto'];?>"><img src="photoprofil/<?php echo $donnees['nomphoto'];?>" width="500px"></a>

<div > Modifier le:<?php echo $donnees['dateheure'];?></div></div>
<?php
}
$reponse->closeCursor();
?>
    
</div><br><br>
<center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Mes Publications</div></center>
<div id="maitre">
   <center> 
<div id="ttparticulier" class="ttparticulier1">
<?php
$reponse = $bdd->prepare('SELECT * FROM publication WHERE numero = ? ORDER BY datetime DESC');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>         
<div class="fadeInRight message"><div id="numero">
<a href="supprimer.php?idmessage=<?php echo $donnees['id'];?>" style="text-decoration: none;">Supprimer</a>
<div style="float: right;margin-right: 7px;"><?php echo $donnees['numero'];?></div>

<a href="photoprofil/<?php echo $donnees['photoprofil'];?>"><img src="photoprofil/<?php echo $donnees['photoprofil'];?>" class="animated wow fadeInDown" width="50px" height="50px" style="border-radius:80px;border:1px solid #fff;float: left;margin-left: 7px;"></a>

</div>
<div id="message">
<?php if ($donnees['verification'] == 'oui'){
        include ('ima.php');
}
elseif ($donnees['verification'] == 'Livre'){
        include ('livrevu.php');   
}else{
        echo $donnees['message'];
}
; ?>
</br>
</br><div id="datetime"><?php echo $donnees['datetime'];?></div>
</div> 
	</div>
<?php
}
$reponse->closeCursor();
?>
</center>
</div>
<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT * FROM photocouverture WHERE numero = ?');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>

<script>
 $('.div20').css('background','url("photocouverture/<?php echo $donnees['nomphoto'];?>")');
  $('.div20').css('background-size','100%');
  $('.div20').css('background-repeat','no-repeat');
  $('.div20').css('background-position','0px,-50px');
</script>
<?php
}
$reponse->closeCursor();
?>
</body>
</html>


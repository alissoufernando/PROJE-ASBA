<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="styleforum.css" />
  <title>
   Notification
  </title>
  <style>
 #global{
  width: 700px;
  height: 600px;
  background: silver;
  overflow: auto;
 }
 #notif{
  height: 30px;
  width: 200px;
  background: #4371db;
  color:#fff;
  font-family: forte;
  font-size:25px;
  margin-top:15px;
  padding: 7px;
  border-radius:8px;
  margin-bottom:25px;
 }
 
 #nom{
  font-size: 18px;
  font-family: cursive;
   
 }
 #img{
  width: 10%;
 }
b{
text-align: justify;
 margin-left: 10px;
 width: 300px;
}
#date{
 height: 25px;
 width: 230px;
 color: #000;
 background: #fff;
 border-radius:8px;
}
#button{
 background: #439cd8;
 border:5px solid #439cd8;
 width: 100px;
 height: 30px;
 color: #fff;
 font-size: 16px;
 cursor: pointer;
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
<?php
include 'connect2.php';
?>
<center><div id="global">
<div id="notif">Mes Notications</div>
<?php
$reponse = $bdd->prepare('SELECT * FROM invitationforum WHERE nomrecepteure = ? ORDER BY dateheure DESC');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<div>
<div id="nom"><?php echo $donnees['nomenvoyeure'];?></div>
<a href="forum3.php?id=<?php echo $donnees['idsujet'];?>"><button style="float: left;margin-left: 10px;" id="button"> Intervenir </button></a>

<?php $req = $bdd->prepare('SELECT * FROM sujet WHERE id = :id');
$req->execute(array(
    'id' => $donnees['idsujet']));

$resultat = $req->fetch();
?>
<i class="fa fa-pencil"></i><?php echo $resultat['sujer'];?> <br><br>
 <div id="date"><?php echo $donnees['dateheure'];?></div>
</div>
<hr>
<?php
}
$reponse->closeCursor();
?>
</div></center><br><br>
</body>
</html>
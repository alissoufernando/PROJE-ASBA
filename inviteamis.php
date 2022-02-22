<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<?php
 try
{
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
<?php
session_start();?>
<?php $_GET['idsection'] ;
include 'connect.php';?>  
<html>
    <head>
        <title>
            Inviter des amis a son forum 
        </title>
        <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
        <style>
            
            #photo{
                width: 70px;
                height: 70px;
                border-radius:100px;
            }
            #gene{
              display: inline-block;
              width: 200px;
              height: 170px;
              margin-left: 5px;
              margin-right:5px;
              background: silver;
              border-radius:8px;
              margin-bottom:15px;
            }
            .gene{
              height: 200px;
              width: 100%;
            }
            #nom{
                font-size: 24px;
                font-family:forte;
            }
            #button{
                width: 120px;
                height: 35px;
                background: blue;
                border-radius:5px;
                border:none;
                font-size:16px;
                color:#fff;
                font-family: cursive;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
      <div>
        <div class="gene">
        <?php
        
$reponse = $bdd->query('SELECT * FROM photoactu ORDER BY id LIMIT 0,30');
while ($donnees = $reponse->fetch())
{  
?>
    <div id="gene">
<center><div id="nom"> <?php echo $donnees['nom_de_la_personne'];?> </div>
<div> <img src="photoprofil/<?php echo $donnees['photo_de_profil'];?>" id="photo" alt="photo de profil" > </div><br>
<a href="invitemoi.php?idsujet=<?php echo $_GET['idsection'];?>&nompersonne=<?php echo $donnees['nom_de_la_personne'];?>&monnom=<?php echo $_COOKIE['nom']?>"><button id="button"> Inviter </button></a>
</center>


</div>
<?php
}
$reponse->closeCursor();
?>
</div>
      </div> 
    </body>
</html>
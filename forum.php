
<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";
}else{
    header ('location:inscription.php');
}
?>
<?php include 'connect.php';
$reponse = $bdd->prepare('SELECT nomphoto FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC LIMIT 0,1');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>

<?php
$name = $donnees['nomphoto'];
setcookie('photoprofil', $name, time() + 365*24*3600,true); ?>
<?php
}
$reponse->closeCursor();
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" href="styleforum.css">
<link href="animate.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){ // Quand le document est complètement chargé

  	var load = false; // aucun chargement de commentaire n'est en cours

  	/* la fonction offset permet de récupérer la valeur X et Y d'un élément
  	dans une page. Ici on récupère la position du dernier div qui
  	a pour classe : ".commentaire" */
  	var offset = $('.commentaire:last').offset();

  	$(window).scroll(function(){ // On surveille l'évènement scroll
  $('.loadmore').hide();
  		/* Si l'élément offset est en bas de scroll, si aucun chargement
  		n'est en cours, si le nombre de commentaire affiché est supérieur
  		à 5 et si tout les commentaires ne sont pas affichés, alors on
  		lance la fonction. */
  		if((offset.top-$(window).height() <= $(window).scrollTop())
  		&& load==false && ($('.commentaire').size()>=2) &&
  		($('.commentaire').size()!=$('.nb_com').text())){

  			// la valeur passe à vrai, on va charger
  			load = true;

  			//On récupère l'id du dernier commentaire affiché
  			var last_id = $('.commentaire:last').attr('id');

  			//On affiche un loader
  			$('.loadmore').show();

  			//On lance la fonction ajax
  			$.ajax({
  				url: 'ajax_comment.php',
  				type: 'get',
  				data: 'last='+last_id,

  				//Succès de la requête
  				success: function(data) {

  					//On masque le loader
  					$('.loadmore').fadeOut(500);
  					/* On affiche le résultat après
  					le dernier commentaire */
  					$('.commentaire:last').after(data);
  					/* On actualise la valeur offset
  					du dernier commentaire */
  					offset = $('.commentaire:last').offset();
  					//On remet la valeur à faux car c'est fini
  					load = false;
  				}
  			});
  		}

  	});

  });
  </script>

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
        .commentaires{
    font-size: 25px;
   padding-top: 8px;
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
#header a{
	color:#fff;
}

</style>
</head>
<body style="background:#e8e8e8;">

<header class="" id="header" >
		<div id="titre">
		<?php include 'monmenu.php'; ?>

		</div>

      <div  id="titre2">
		<i class="pe-7s-menu menu">  </i>
		</div>
		<div style="float:right;"><?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT nomphoto FROM profilphoto WHERE nom_utilisateur = ? ORDER BY dateheure DESC LIMIT 0,1');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<a href="photoprofil/<?php echo $donnees['nomphoto'];?>">
<img src="photoprofil/<?php echo $donnees['nomphoto'];?>"
width="60px" height="60px" style="border-radius:80px;border:1px solid #fff;margin-top:-45px;margin-right:10px;"
class="animated wow fadeInDown"></a>
<?php
}
$reponse->closeCursor();
?></div>
		</header>

<section id="leftt" style="margin-left:7px;">
  <div class="profil" style="color:#fff;">
  <center> Actualités </center>
  </div>
<?php
 include 'connect.php';
$reponse = $bdd->query('SELECT * FROM infoslocal ORDER BY id DESC LIMIT 0,1');
while ($donnees = $reponse->fetch())
{
?>
<?php $message = $donnees['information'];
       echo substr($message,0,600).'...';?><br><br>
	   <center><button class="btn btn-primary"> Lire la suite </button></center>
<?php
}
$reponse->closeCursor();
?>
<br><br><br><br><br>
<div class="profil" style="color:#fff;">
<center> Notifications </center>
</div>
<div id="notification">
  <?php
  include 'connect2.php';
  ?>
  <center><div id="global">

  <?php
  $reponse = $bdd->prepare('SELECT * FROM invitationforum WHERE nomrecepteure = ? ORDER BY dateheure DESC');
  $reponse->execute(array($_COOKIE['nom']));
  while ($donnees = $reponse->fetch())
  {
  ?>
  <div>
  <div id="nom"><?php echo $donnees['nomenvoyeure'];?></div>
  <a href="forum3.php?id=<?php echo $donnees['idsujet'];?>"><button style="float: left;margin-left: 10px;" class="btn btn-info btn-xs"> Intervenir </button></a>

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
  </div>



</div>

</section>

<!--section droite c'est pour dire le menu-->
<article  class="droite">

     <div class="divmenu">
 <br>
</div>
     <br>

<hr class="hr1" id="hr12"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Etudes</div></center>
<br>

<a href="forum1.php"><button class="general"> <i class="fa fa-inbox g">  </i>Forum</button></a>
<a href="https://openclassrooms.com/"><button class="general"> <i class="fa fa-book g">  </i>Informatique</button></a>
<a href="https://openclassrooms.com/"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Electronique</button></a>
<a href="https://openclassrooms.com/"><button class="general"> <i class="fa fa-global g">  </i>Mécanique</button></a>
<a href="https://openclassrooms.com/"><button class="general"> <i class="fa fa-hand-o-right g">  </i>Autre ++</button></a>
<hr class="hr1"><center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Mes sujets</div></center><br>
<div >
<?php
include ('connect2.php');
$reponse = $bdd->prepare('SELECT * FROM sujet WHERE nomutilisateur = ? ORDER BY id DESC LIMIT 0,5');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<img src="photoprofil/<?php echo $donnees['photodeprofil'];?>"
width="50px" height="50px" style="border-radius:80px;border:1px solid #fff;margin-left:5px;"
class="animated wow fadeInDown">
<span style="float:right;">
<p> <?php echo substr($donnees['sujer'],0,20).'...';?> </p>
<p style="font-weight:bold;"> <?php echo $donnees['date'];?> </p></span><hr>
<?php
}
$reponse->closeCursor();
?>

</div>
</article>
<!--Finde la section de la droite -->
<div align="center" class="cadre1">
<div class="cadre2" ><h2>ltmessenger</br>
</div>
<div id="partit">
<div id="ttparticulier">
  <?php
  include 'connect.php';
  $reponse = $bdd->query('SELECT * FROM publication ORDER BY id DESC LIMIT 2');
  while ($donnees = $reponse->fetch())
  {
    ?>
    <div class="commentaire" id="<?php echo $donnees['id']?>">
    <div class="fadeInRight message" id="message"><div id="numero" ><div style="float: right;margin-right: 7px;"><a href="privemessageforum.php?pseudo=<?php echo $donnees['numero'];?>" style="color:black;"><?php echo substr($donnees['numero'],0,10);?></a>
    </div>

    <a href="photoprofil/<?php echo $donnees['photoprofil'];?>"><img src="photoprofil/<?php echo $donnees['photoprofil'];?>" width="50px" height="50px" style="border-radius:80px;border:1px solid #fff;float: left;margin-left: 7px;" ></a>

    </div>
    <div id="message">
    <?php if ($donnees['verification'] == 'oui'){
            echo $donnees['commentaire'];
            include ('ima.php');
    }
    elseif ($donnees['verification'] == 'Livre'){
            include ('livrevu.php');
    }else{
           include "messagepublier.php";
    }
    ; ?>
    </div>
    <!-- Bas de page --> <hr class="hr5" style="margin-top:27px;">
    <div class="basdeaffichage">
    <div style="float:right;font-size: 20px;margin-top: 13px;" id="aimer"><a href="aimer.php?id=<?php echo $donnees['id'];?>"><i class="fa fa-heart"> <?php
    if ($donnees['aimer'] >= 2000){
            echo '2k+';
    }else{
      echo $donnees['aimer'];
    }?>
    </i></a>
    </div>
    <div id="datetime"><?php echo $donnees['datetime'];?>

    </div>
    <div class="commentaires"> <a href="commentaire.php?idpublication=<?php echo $donnees['id'];?>">
    <i class="fa fa-comment" style="font-size:23px;">
    <?php echo $donnees['nombre_de_commentaire'];?></i></div></a>
    </div>

    </div>
    <?php
    }
    $reponse->closeCursor();
    ?>
</div>
</div>
<center><img src="camera-loader.gif" class="loadmore"></center>
</body>
</html>

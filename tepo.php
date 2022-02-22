 <hr class="hr0"><center><button class="boutton2" style="border:none;background: orange;">Fonctionnalités</button></center>
    <article class="profits">
     <div class="divprofits"><br><br><br>
      <p class="p8">
       Inscrivez-vous et profitez de nos nombreuses fonctionnalité:
      </p>
      <ul class="ul">
       <li>Espace membre</li><br>
       <li>Suivez des cours</li><br>
       <li>Notre système de chat privé</li><br>
       <li>Notre système de création de groupe privé</li><br>
       <li>Publication d'une information</li><br>
       <li>Posibilité de faire de la publicité</li><br>
       <li>Possibilté d'accéder à des sites pour étudier</li><br>
       <li>Et plein d'autres choses...</li>
      </ul>
      
    <a href="licence.php"><button class="inscriptionn">J'en Profite!</button></a>
     </div>
     
    </article>
    
    <hr class="hr0"><center><button class="boutton2" style="border:none;background: green;">Informations Local</button></center>
  
  <?php
 include 'connect.php';
$reponse = $bdd->query('SELECT * FROM infoslocal ORDER BY id DESC LIMIT 0,1');
while ($donnees = $reponse->fetch())
{
?>
<div class="infolocal">
     <div class="couleurdeinfolocal">
      <p class="p5"> <?php echo $donnees['interrese']; ?> </p>
      <p class="p6">
       <?php $message = $donnees['information'];
       echo substr($message,0,750).'...';?><br>
       <button data-toggle="modal" href="#infos" class="btn btn-primary">Suite...</button>
<div class="modal" id="infos" style="z-index: 9999;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" datadismiss="modal">x</button>
<h4 class="modal-title">Plus d'informations</h4>
</div>
<div class="modal-body">
<?php echo $message;?>
</div>
<div class="modal-footer">
<button class="btn btn-info" data-dismiss="modal">Fermer</button>
</div>
</div>
</div>
</div>
<div class="nompublieur">Par: <?php echo $donnees['nompublieur'];?></div>
      </p>
      
     </div>
    </div>

<?php
}
$reponse->closeCursor();
?>
  
 <style>
  .secondaire{
   background: url('14.jpg');background-size: 100%;
  }
  @media screen and (max-width: 1200px)
{
 .secondaire{
   background: url('pexels-photo-513516.jpeg');
  }
 </style> 
  
  
    
    
<hr class="hr0" id="id"><center><button class="boutton2" style="border:none;" id="id">Administration</button></center>

<section class="admin"><center>
 <div class="interieur">
 <div class="principal">
<div class="secondaire">
    <center><img src="cc/user3_64.png" title="proviseur" alt="Proviseur" class="img"></center>
<p class="p3">Proviseur du lycée Technique d'Amitie sino-Béninoise d'Akassato depuis près de deux ans. Sa diligence et son sens du travil bien fait
lui donne une autorité sur tout les élèves. Il est la première autorité du Lycée.</p>

 <center><h4><i class="fa fa-user"> Proviseur: Mr Augustin NASSARA </i></h4> 
 <h4><i class="fa fa-yahoo"> Email:nassara@yahoo.com </i></h4>
  <h4><i class="fa fa-mobile"> Téléphone:95562816 </i></h4></center> 
</div>
 </div>      

 
 <!--Le censeur-->
 <div class="principal">
<div class="secondaire">
    <center><img src="1.ico" title="proviseur" alt="Proviseur" class="img"></center>
<p class="p3">Intendant du lycée Technique d'Amitie sino-Béninoise d'Akassato depuis près de deux ans. Sa diligence et son sens du travil bien fait
lui donne une autorité sur tout les élèves. Il est la deuxième autorité du Lycée.</p>

 <center><h4><i class="fa fa-user"> Intendant: Mr Hervé AGOSSADOU </i></h4> 
 <h4><i class="fa fa-yahoo"> Email:nassara@yahoo.com </i></h4>
  <h4><i class="fa fa-mobile"> Téléphone:95562816 </i></h4></center> 
</div>
 </div>
 
 <!--Le Intendant-->
 <div class="principal">
<div class="secondaire">
    <center><img src="cc/user4_64.png" title="proviseur" alt="Proviseur" class="img"></center>
<p class="p3">Cenceur du lycée Technique d'Amitie sino-Béninoise d'Akassato depuis près de deux ans. Sa diligence et son sens du travil bien fait
lui donne une autorité sur tout les élèves. Il est la troisième autorité du Lycée.</p>

 <center><h4><i class="fa fa-user"> Cenceur: Mme EDDAH Hervée </i></h4> 
 <h4><i class="fa fa-yahoo"> Email:nassara@yahoo.com </i></h4>
  <h4><i class="fa fa-mobile"> Téléphone:95562816 </i></h4></center> 
</div>
 </div>
 
 <!--Le surveillant-->
 <div class="principal">
<div class="secondaire">
    <center><img src="2.ico" title="proviseur" alt="Proviseur" class="img"></center>
<p class="p3">Surveillant du lycée Technique d'Amitie sino-Béninoise d'Akassato depuis près de deux ans. Sa diligence et son sens du travil bien fait
lui donne une autorité sur tout les élèves. Il est la quatrième autorité du Lycée.</p>

 <center><h4><i class="fa fa-user"> Surveillant Général: Mr KASSA  </i></h4> 
 <h4><i class="fa fa-yahoo"> Email:nassara@yahoo.com </i></h4>
  <h4><i class="fa fa-mobile"> Téléphone:95562816 </i></h4></center> 
</div>
 </div>
  </div>
 <?php
$reponse = $bdd->query('SELECT * FROM actualite ORDER BY id DESC LIMIT 0,1');
while ($donnees = $reponse->fetch())
{
?>
<?php $photo = $donnees['nom_image'];?>
<?php $lien = $donnees['lien'];?>
<?php $titre = $donnees['titre'];?>
<?php $resume = $donnees['resume'];?>

<?php
}
$reponse->closeCursor();
?>
 <?php
$reponse = $bdd->query('SELECT * FROM actualite ORDER BY id DESC LIMIT 1,2');
while ($donnees = $reponse->fetch())
{
?>
<?php $photo1 = $donnees['nom_image'];?>
<?php $lien1 = $donnees['lien'];?>
<?php $titre1 = $donnees['titre'];?>
<?php $resume1 = $donnees['resume'];?>

<?php
}
$reponse->closeCursor();
?>
<?php
$reponse = $bdd->query('SELECT * FROM actualite ORDER BY id DESC LIMIT 2,3');
while ($donnees = $reponse->fetch())
{
?>
<?php $photo2 = $donnees['nom_image'];?>
<?php $lien2 = $donnees['lien'];?>
<?php $titre2 = $donnees['titre'];?>
<?php $resume2 = $donnees['resume'];?>

<?php
}
$reponse->closeCursor();
?>
 
</section></center>
<br><br>
<hr class="hr0"><center><button class="boutton2" style="border:none;background:#4097d1;margin-bottom: 20px;">Actualités</button></center>
<section class="milieu">
 <div id="myCarousel" class="carousel slide slidee" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="actualite/<?php echo $photo;?>" alt="Chania" id="imgg">
      <div class="carousel-caption">
        <h3><?php echo $titre ;?></h3>
        <p><?php echo $resume ;?></</p>
      </div>
    </div>

    <div class="item">
      <img src="actualite/<?php echo $photo1 ;?>" alt="Chicago" id="imgg">
      <div class="carousel-caption">
        <h3><?php echo $titre1 ;?></h3>
        <p><?php echo $resume1;?></</p>
      </div>
    </div>

    <div class="item">
      <img src="actualite/<?php echo $photo2;?>" alt="New York" id="imgg">
      <div class="carousel-caption">
        <h3><?php echo $titre2 ;?></h3>
        <p><?php echo $resume2 ;?></</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   <span class="icon-prev"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <div class="rightt">
 <hr class="hr2">
<center><div class="deplace"></div></center>
<h2 class="h2" style="color:#000;font-size:39px;text-align:center;font-family:Footlight MT Light;">Présentation du Lycée</h2>
<article class="nav1">
<?php
$tout="Le lycée Technique d'Amitie Sino-Béninoise d'Akassato est l'un des Lycée les plus prestigieux du Bénin. Il fit ces preuves d'une dixipline
absolu par son rendement de 2014-2015 qui fait 100% sans présédent. Ce lycée en soi contient deux type de régime l'internat et l'externat. L'entrée
dans ce Lycée est tout simplement limité et ceux qui y ont accès font preuve d'une certaine qualité jugé selon l'Etat. Concernant les deux régime
admit dans ce lycée, il faut bien notifié qu'auqu'un de ces régime ne fait preuve de légereté lors de la selection. Ceci etant nos rendement sont tout
aussi remarquable que jamain. Mais comme tout les autres Lycée nous fesons aussi des Journée dite culturele afin de valorisé nos culture et l'ensemble
de ces journées sont marqué de diverse prestation dont l'absence serait très regrétable. Bien nous nous amusont bien nous travaillons. Le
Lycée met à la incite les élèves à créer des projets que nous appelé projet PHARE qui permet au élève de chaque promotion de créer ou d'inventer quelque chose
pour la mémoire du Lycée notons bien que tout cet projet son libre permettant libre accès à tout le monde d'y
participer selon son niveau et son désire. Pour découvrire nos projet PHARE veillez cliquer <a href='#'> ici </a>.";
?>
<?php echo substr($tout,0,900).'...';?><br><br>

</article>
</div>

 </div>
</section>
<br><br>
<div id="spe">
<hr class="hr0" ><center><button class="boutton2" style="border:none;background:#FF6666;margin-bottom: 20px;" >Les meilleurs</button></center>
<section class="meilleurs"><center><p style="font-size:50px;color:#fff;padding: 20px;font-family:Britannic Bold;" >2016-2017</p></center>
<!--Premier-->
<center>
<div class="personnne">
 <center><img src="gracias.jpg" alt="premier" title="Le Premier de l'école" style="border-radius:50px; width:80px; height:80px;border:3px solid #fff;margin-top: 10px;"></center><br>
 <p class="p4">Première du Lycée avec une moyenne égale à 18,55.<br>Seconde Electrotechnique</p>
 <center><h5><i class="fa fa-mobile" style="font-size: 20px;">: 95562816 </i></h5>
 <center><h4>Adéline</h4></center><button class="button3"><i class="fa fa-facebook"> Facebook</i></button></center>
</div>
<!--Deuxième-->
<div class="personnne">
 <center><img src="IMG_20170429_124913.jpg" alt="deuxième" title="Le Deuxième de l'école" style="border-radius:50px; width:80px; height:80px;border:3px solid #fff;margin-top: 10px;"></center><br>
 <p class="p4">Deuxième du Lycée avec une moyenne égale à 18,55.<br>Seconde Electrotechnique</p>
 <center><h5><i class="fa fa-mobile" style="font-size: 20px;">: 95562816 </i></h5>
 <center><h4>Céline</h4></center><button class="button3"><i class="fa fa-facebook"> Facebook</i></button></center>
</div>
<!--Troisième-->
<div class="personnne">
 <center><img src="ophe.jpg" alt="troisième" title="Le Troisième de l'école" style="border-radius:50px; width:80px; height:80px;border:3px solid #fff;margin-top: 10px;"></center><br>
 <p class="p4">Troisième du Lycée avec une moyenne égale à 18,55.<br>Seconde Electrotechnique</p>
 <center><h5><i class="fa fa-mobile" style="font-size: 20px;">: 95562816 </i></h5>
 <center><h4>Ophé</h4></center><button class="button3"><i class="fa fa-facebook"> Facebook</i></button></center>
</div></center>
</section>
</div>
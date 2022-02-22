<?php
include 'connect.php';
$id = $_GET['last'];
$reponse = $bdd->query('SELECT * FROM publication WHERE id < "'.$id.'" ORDER BY id DESC LIMIT 0,3');
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
        echo '2k';
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

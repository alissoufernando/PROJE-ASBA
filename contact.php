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
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" href="contactcss.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />

<title><?php echo $_COOKIE['nom'];?>-Forum </title>
<style>
        .deplace{
                margin-top: 10px;
                padding-bottom: 30px;
                padding-top: 10px;
                width: 200px;
                
        }
		  #mona{
			display: none;
		  }
		  
		  @media screen and (max-width: 1160px){
			.sauvegarder_un_contact{
				display: none;
			}
			#mona{
			display: block;
		  }
			.les_contacts_sauvegarder{
				float: none;
				margin: 35px;
				width: auto;
			}
		  }
		  #header a{
	color:#fff;
}
</style>
</head>
<body>

<header id="header">
		<div  id="titre">
<?php include 'monmenu.php'; ?>
		</div>
      
      <div align="center"  id="titre2">           
		<i class="pe-7s-menu menu">  </i>
		</div>
		</header>

<article>
<div class="sauvegarder_un_contact">
    <center><form action="traitementcontact.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Saisissez le nom de la personne" minlength="1" accesskey="k" select="selected" name="nom"><br>
    <input type="tel" placeholder="Saissizez le contact" minlength="5" name="tel"><br>
    <input type="email" placeholder="Saisissez sont adress email" name="email">
    <hr> <p class="p3">Information complémentaire</p> <hr>
    <input type="number" placeholder="Rue N°" name="rue"><br>
    <input type="text" placeholder="Quatier" name="quartier"><br>
    <input type="text" placeholder="Ville" name="ville"><br>
    <input type="number" placeholder="Boite Postale" name="postal"><br>
    <input type="text" placeholder="Etat" name="etat"><br>
    <input type="text" placeholder="Pays" name="pays"><br>
     <div class="input-file-container">  
        <input class="input-file" id="my-file" type="file" name="monfichier">
        <label tabindex="0" for="my-file" class="input-file-trigger">Selectionez le profil</label>
        </div>
        <p class="file-return"></p><br>
        <button type="submit" class="button1">Soumettre</button>
    </form></center></div>


<div class="les_contacts_sauvegarder" style="border:1px solid silver;margin-right: 25px;padding: 10px;">
<center><div class="deplace" style="color:#fff;font-size: 16px;font-family: forte;">Mes Contacts</div></center>
  <?php
include ('connect.php');

$req = $bdd->prepare('SELECT id FROM contact WHERE nom_enregistreur = :numero');
$req->execute(array(
    'numero' =>$_COOKIE['nom']));
$resultat = $req->fetch();
if (!empty($resultat)){
        include 'viewcontacts.php';
}else{
        include 'nocontact.php';
}?>
    
</div> 
</article>



<script>
document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
</script>
</body>
</html>
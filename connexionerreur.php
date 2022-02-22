<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<!DOCTYPE>
<html>
    <head>
        <title>
    Inscription ASBA
        </title>
<meta charset="utf-8">
<link href="asbastyle.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="barredefilement.css" />
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <?php
include("tete.html");
?>
<div class="image"></div>
        <div class="inscription">
            <p class="p1">Inscrivez-vous ici! </p>
            <form method="post" action="formulaire.php">
                <div class="col-3 input-effect">
                    <input class="effect-18" type="text" placeholder="" name="num" alt="numero" required>
                    <label style="color: red;">!Désolé ce pseudo est déjà occupé</label>
                    <span class="focus-border"></span>
                </div>
                
                <div class="col-3 input-effect" >
                    <input class="effect-18" type="password" name="motpasse" alt="mot de passe" required >
                    <label>Votre mot de passe</label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-3 input-effect">
                    <input class="effect-18" type="password" id="motpasse" name="confirmpass" alt="mot de passe" required>
                    <label>Confirmer votre mode passe</label>
                    <span class="focus-border"></span>
                </div>
                
                <div class="col-3 input-effect">
                    <input class="effect-18" type="Email" placeholder="" name="email">
                    <label>Entrer votre email</label>
                    <span class="focus-border"></span>
                </div><br>
           
           <center><button type="submit" class="btn btn-primary"> Soumettre </button><br><br>
           <a href="inscription.php"><button type="button" class="btn btn-link">Vous avez déjà un compte</button></a></center>
            </form>
            </div>
        
        <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script>
// JavaScript for label effects only
	$(window).load(function(){
		$(".col-3 input").val("");
		
		$(".input-effect input").focusout(function(){
			if($(this).val() != ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		})
	});
</script>
    </body>
</html>
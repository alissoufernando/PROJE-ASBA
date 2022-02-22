<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<html>
<head>
    <title><?php echo $_COOKIE['nom'];?>-Forum </title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<style>
    input{
        width: 400px;
        height: 50px;
        margin: 8px;
        border-radius:6px;
        border:1px solid silver;
    }
    fieldset{
        width: 500px;
        background: url('pexels-photo-513516.jpeg');
        background-repeat: no-repeat;
        background-size: 130%;
         
    }

    legend{
        background: #0987e8;
        height: 40px;
        color: #000;
        font-family: Children of the Starlight;
        font-size: 30px;
    }
    
    button{
	transition:0.3s;
	width:150px;
	height:40px;
	background:#b76959;
	border:4px solid #b76959;
	border-radius:8px;
	font-size:20px;
	margin-bottom: 10px;
}

::-webkit-input-placeholder{
    font-size: 16px;
}
</style>



</head>
<body>
<br><br><br>
<center>
<fieldset class="fieldset2">
<legend class="legend2"> Publier un livre </legend>
<form method="Post" action="partagedelivretraitement.php">
<input type="text" placeholder="Titre du livre" required="required" name="titre" class="ppp" id="partageid" class="objet"/></br>
<input type="text" placeholder="Auteur du livre" required="required" name="auteur" class="ppp" id="partageid"/></br>
<hr><span style="color:#000;font-size:35px;font-family: Children of the Starlight;">Bref Résumé</span><hr>
<input type="text" placeholder="Bref résumé du livre..." required="required" name="message" class="ppp" id="partageid"/></br>
<button type="submit" value="Envoyer" style="" id="tout"> Soumettre </button> </button>
</form>
</fieldset></center>

</body>
</html>
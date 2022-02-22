
<html>
    <head>
	<title> Pee-Com </title>
	<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="css/animatee.css">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="mespolice.css">
<link rel="stylesheet" type="text/css" href="indexcss.css">
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    </head>
	<style>
        #background{
            background:#fff;
			width:350px;
			border-radius:3px;
			border:1px solid #eaeaea;
			padding:15px;
        }
		
		#connect{
			background:#fff;
			width:350px;
			border-radius:3px;
			height:70px;
			margin-top:25px;
			border:1px solid #eaeaea;
			font-family:Cambria;
			font-size:16px;
		}
		#pgene{
			font-family:Amperzand;
			font-size:45px;
			color:#000;
		}
    body{
      background:#f7f7f7;
    }
	*{
	margin:0px;}
	
	input{
	width:250px;
	height:30px;
	border:1px solid silver;
	border-radius:2px;
	background:#f4f4f4;
	color:#000;
	font-size:16px;
	margin-bottom:10px;
	margin-top:5px;
	padding-left:7px;
	}
	input:focus{
		border:1px solid silver;
	}
	::-webkit-input-placeholder{
	color:silver;
  font-size:14px;
  margin-left:20px;
  font-family:Bell MT;
  letter-spacing:2px;
}
.button1:hover{
	transition:0.3s;
	width:250px;
	height:30px;
	background:#4375d8;
	border:4px solid #4375d8
	border-radius:8px;
	font-size:15px;
	margin-left:5px;
	margin-top:30px;
	color:#fff;
	font-family:Georgia;
	font-weight:bold;
}
.button1{
	transition:0.3s;
	width:250px;
	height:30px;
	background:#4375d8;
	border:4px solid #4375d8;
	border-radius:8px;
	font-size:15px;
	margin-left:5px;
	margin-top:30px;
	color:#fff;
	font-family:Georgia;
	font-weight:bold;
}

 #inscrit{
        display: none;
    }
.loader{
    height: 100px;
    width: 30px;
    z-index: 9999;
    display: none;
}
	</style>
    <body>

  <center></br></br></br></br></br>
<div id="marecherche" style="color:#000;display:none;background:#c96758;width:350px;margin-bottom:10px;height:30px;border:1px solid #eaeaea;padding:3px;color:#fff;">

</div>
 <div id="background">
 <p id="pgene" class="animated wow bounceInDown">ltmessenGer</p>
  <p style="color:#a3a3a3;font-size:17px;font-family:Bell MT;font-weight:bold;
  width:310px;"> Inscrivez-vous et resté connecté avec vos amis,partagez vos blague,vos livres... </p>
 <form method="post" action="formulaire.php">
 <input  type="text" name="num" alt="numero" required maxlength="10" id="username" placeholder="Pseudo"> 
   <input  type="password" name="motpasse" alt="mot de passe" required id="password" placeholder="Mot de passe">
   <input  type="password" id="motpasse" name="confirmpass" alt="mot de passe" required placeholder="Confirmation">
   <input  type="Email" name="email" required placeholder="Email,numero">
   <button type="submit" class="button1" id="submit"> Inscription </button>
   <br><br>
   <p style="color:#a3a3a3;font-size:15px;font-family:Cambria;
  width:320px;">En vous inscrivant, vous acceptez nos 
   <a href="licence.php" style="text-decoration:none;">Conditions d’utilisation</a> et notre Politique de confidentialité.</p>
   </form>
 <br><br> 
 </div>
 
 <div id="connect"><br>Avez-vous un compte? <a href="inscription.php" style="text-decoration:none;"> Se connecté</a><br>
</div><br>
  </center>
<script src="js/jquery.min.js"></script>
   <script>
$(document).ready(function (){
	$("#username").keyup(function(){
		var recherche = $(this).val();
		var data = 'motclef=' + recherche;
		if(recherche.length>0){
			$.ajax({
				type : "GET",
				url : "result.php",
				data : data,
				success : function (server_response){
				$("#marecherche").html(server_response).show();	
				}
			});
		}
	})
	
})
</script>
    </body>
</html>

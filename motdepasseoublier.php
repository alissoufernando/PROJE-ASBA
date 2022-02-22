
<html>
<head
    
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" href="messageprive.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="jquery.js"></script>
<title>Connexion de secoure </title>
<style>
  .special{
    width: 400px;
    height: 260px;
    border-radius:8px;
    background: url('glasses-415257_960_720.jpg');
    background-size: 100%;
  }
  input[type="password"]{
    width: 350px;
    height: 50px;
    border:none;
    border-radius:8px;
    transition: 0.5s;
  }
  input[type="password"]:focus{
    background: rgba(253,253,253,0.6);
    transition: 0.5s;
  }
  input[type="text"]{
    width: 350px;
    height: 50px;
    border:none;
    border-radius:8px;
    transition: 0.5s;
  }
  input[type="text"]:focus{
    background: rgba(253,253,253,0.6);
    transition: 0.5s;
  }
</style>
</head>
<body>
    <center><br><br><br>
<div class="special">
<form action="traitementsecoure.php" method="post">
     <br><br>
     
<input type="text" placeholder="Pseudo" name="pseudo_utilisateur"><br><br>
<input type="password" placeholder="Mot de passe secoure" maxlength="5" select name="secoureverification"><br><br><br>
<a href="inscription.php"><button type="button" class="btn btn-info" style="float: left;margin-left: 10px;">Annuler</button></a>
<button type="submit" class="btn btn-success" style="float: right;margin-right: 10px;">Soumettre</button>
</form>
</div>


</center>
</body>
</html>
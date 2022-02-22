<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<html>
<head

<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" href="messageprive.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="jquery.js"></script>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="photoprofil/<?php echo $_COOKIE['photoprofil']; ?>" />
<title> Commentaire </title>
<style>
  .commentaire{
    margin-top: 200px;
    width: 800px;
    height: 350px;
    background-image: url('office-freelancer-computer-business-38604.jpeg');
    background-size: 100%;
    border-radius:10px;
    box-shadow: 0px 0px 50px #000;
  }
  textarea{
    margin-top:60px;
    width: 600px;
    height: 120px;
    border:1px solid silver;
    border-radius:8px;
    transition: 0.5s;
  }
  textarea:focus{
    background: rgba(253,253,253,0.6);
    transition: 0.5s;
  }
  
</style>
</head>
<body>
<?php $commentaire = $_GET['idpublication'];
setcookie ('publicationid', $commentaire);
?>

<center><div class="commentaire">
<form action="traitementcommentaire.php" method="post">
<textarea name="commentaire"></textarea><br><br><br>
<button class="btn btn-primary" >Soumettre</button>
</form>
</div>
</center>
</body>
</html>
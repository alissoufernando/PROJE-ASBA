
<html>
<head
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" href="messageprive.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="jquery.js"></script>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<title>Page d'administration </title>
<style>
  .special{
    width: 900px;
    height: 500px;
    border-radius:8px;
    background: url('glasses-415257_960_720.jpg');
    background-size: 100%;
    box-shadow: 0px 0px 30px #000;
  }
  .speciall{
    width: 900px;
    transition:0.5s;
    height: 600px;
    border-radius:8px;
    background: url('pexels-photo-485489 (1).jpeg');
    background-size: 100%;
  }
  .speciall:hover{
    transition:0.5s;
     box-shadow: 0px 0px 30px #000;
  }
  
  textarea{
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
  nav{
    width: 200px;
    height: 60px;
    display: inline-block;
    background: rgba(10,12,10,0.3);
    border-radius: 8px;
    font-family: forte;
    font-size: 18px;
    color: #000;
  }
  span{
    font-size: 30px;
    font-family: cursive;
  }
  hr{
    height: 5px;
  }
  .indicatif{
    height: 30px;
    width: 400px;
    background:#1e64bf;
  }
  input[type="text"]{
    width: 420px;
    height: 60px;
    border:none;
    border-radius:8px;
    transition: 0.5s;
  }
  input[type="text"]:focus{
    background: rgba(253,253,253,0.6);
    transition: 0.5s;
  }
  #label{
    padding: 6px;
    cursor: pointer;
    transition:0.5s;
    background:#1e64bf;
   width: 70px;
   height: 70px;
    border-radius: 100px;
  }
  #label:hover{
    transition:0.5s;
    background:rgba(253,253,253,0.6);
  }
  
</style>
</head>
<body>
  
    <center><br><br><br>
    <div class="indicatif" style="color:#fff;font-size: 16px;font-family: forte;">Informations locals</div>
<div class="special">
<form action="infotraitement.php" method="post">
     <br><br>
     <nav>
     <label for="interne"> Interné </label><br>
   <input type="radio" name="concernant" value="Internés" id="interne"></nav>
   <nav><label for="externe"> Externer </label><br>
   <input type="radio" name="concernant" value="Externer" id="externe"></nav>
   <nav><label for="lycee"> Lycée </label><br>
   <input type="radio" name="concernant" value="Lycée" id="lycee"></nav> <br><br>
   <hr> <span>L'information à publier</span><hr>
<textarea name="info">Entrer ici l'information à publier </textarea><br><br>

<button type="submit" class="btn btn-success">Soumettre</button>
</form>
</div>
</center>
    <hr>
 <!-- Les actualité -->
 
  <center><br><br><br>
    <div class="indicatif" style="color:#fff;font-size: 16px;font-family: forte;">Les actualités</div>
<div class="speciall">
<form action="actualitetraitement.php" method="post" enctype="multipart/form-data">
     <br><br>
   
   <input type="text" name="titre" placeholder=" Titre de l'information" id="interne"><br><br>
   <input type="text" name="lien" placeholder="Lien de redirection" id="externe"><br><br>
   <input type="text" name="resume" placeholder="Bref résumé de l'information" id="lycee"> <br><br>
   <hr> <span>Image d'actualité</span><hr>
       <label for="actu"><img src="22150-bubka-PNGImage.png" id="label"></label><br>
<input type="file" name="monfichier" style="visibility: hidden;" id="actu"><br>

<button type="submit" class="btn btn-success">Soumettre</button>
</form>
</div>


</center>
    
</body>
</html>
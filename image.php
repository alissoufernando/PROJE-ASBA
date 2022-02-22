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
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<title><?php echo $_COOKIE['nom'];?>-Forum </title>
<style>
    .photo{
        width: 400px;
        margin-top: 50px;
        background: url('glasses-415257_960_720.jpg');
        background-size: 100%;
        padding: 50px;
    }
    input[type="file"]{
        visibility: hidden;
    }
    label{
        cursor: pointer;
        font-size: 30px;
       padding: 15px;
       background: blue;
       border-radius:80px;
    }
    input[type="text"]{
        width:300px;
        height: 45px;
        border-radius:7px;
        border:1px dotted #000;
    }
    ::-webkit-input-placeholder{
        font-size: 18;
        font-family: forte;
    }
    input[type="submit"]{
        transition:1s;
        background: none;
        padding: 8px;
        border: 3px solid #000;
        width: 150px;
        cursor: pointer;
        font-size:25px;
       padding: 8px;
       font-family: forte;
       border-radius:8px;
    }
    input[type="submit"]:hover{
        transition:1s;
        background: blue;
       
    }
</style>
</head>
<body>
<center><div class="photo">
<form method="post" action="imagepublier.php" enctype="multipart/form-data">
    <label for="profil"><i class="fa fa-picture-o"></i></label><br>
<input type="file" name="monfichier" id="profil"><br>
<input type="text" name="desciption" placeholder="Laisser un pti mot"><br><br>
<input type="submit" value="Soumettre"><br>
</form></div></center>
</body>
</html>